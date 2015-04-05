import os
import cherrypy

PATH = os.path.abspath(os.path.dirname(__file__))
class Root(object): pass

cherrypy.tree.mount(Root(), '/', config={
        '/': {
                'tools.staticdir.on': True,
                'tools.staticdir.dir': PATH,
                'tools.staticdir.index': 'index.html',
            },
    })

cherrypy.config.update(
    {'server.socket_host': 'diseno2015a.ddns.net' } ) # Pub IP
cherrypy.config.update({'server.socket_port': 80})
#cherrypy.quickstart()
cherrypy.engine.start()
