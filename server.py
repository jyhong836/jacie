#!/usr/bin/python
# aiml
import aiml
# tools
import os.path
import marshal
import json
# gevent
from geventwebsocket.server import WebSocketServer
from geventwebsocket.resource import Resource,WebSocketApplication
from geventwebsocket.protocols.wamp import WampProtocol, export_rpc

def printInColor( s ):
	print "%s[32;2m%s%s[0m"%(chr(27), s, chr(27))

class JacieApp(WebSocketApplication):
	"""docstring for JacieApp"""
	def on_open(self):
		print "oh,it's opened!"

	def on_message(self, message):
		if message is None:
			return
		# print "msg:"+message
		message = json.loads(message)

		uname  = message['name']
		umsg   = message['message']
		ucolor = message['color']

		print 'name: ' + uname
		print 'msg: '  + umsg
		print 'color:' + ucolor

		re = k.respond(umsg, uname)
		printInColor(re)
		current_client = self.ws.handler.active_client
		current_client.nickname = message['name']

		# send the user's message back
		self.ws.send(json.dumps({
			'type': 'usermsg',
			'message': umsg,
			'name': uname,
			'color': ucolor
			}));
		# send the jacie's response
		self.ws.send(json.dumps({
			'type': 'jacie',
			'message': re
			}))
		# self.ws.send(k.respond(umsg, uname))

		# print "hi!message: ",message

	def on_close(self, reason):
		print "damm it, it's closed!"


def initAIMLRob():
	'''
	init PyAIML, including load brain.
	files: 
		./Hons.ses     : save the session
		./standard.brn : the brain
	'''

	defautl_ses = "aiml/Hong.ses"
	default_brn = "aiml/standard.brn"

	k = aiml.Kernel()
	k.setBotPredicate("name", "Jacie")
	name = k.getBotPredicate("name")
	#k.learn("./alice/*.aiml")
	#k.learn("./standard/*.aiml")
	if os.path.isfile(defautl_ses):
		print "found " + defautl_ses+", loaded"
		sessionFile = file(defautl_ses, "rb")
		session = marshal.load(sessionFile)
		sessionFile.close
		for pred,value in session.items():
			k.setPredicate(pred, value, "Hong")
	# else:
	if os.path.isfile(default_brn):
		k.bootstrap(brainFile = default_brn)
	else:
		print "error: can't find brn file."
		return None
		# k.bootstrap(learnFiles = "std-startup.xml", commands="load aiml b")
		# k.saveBrain("standard.brn")
	return k

if __name__ == "__main__":
	resource = Resource({
		'^/jacieapp$': JacieApp,
	})

	k = initAIMLRob()

	if k!=None:
		print "start websocket server"
		WebSocketServer(("", 8000),resource, debug=False).serve_forever()
		
