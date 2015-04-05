import cherrypy

class Root(object):
    @cherrypy.expose
    def index(self):
        return "Hello World!"

cherrypy.config.update({'server.socket_host': '0.0.0.0'})

if __name__ == '__main__':
   cherrypy.quickstart(Root(), '/')
