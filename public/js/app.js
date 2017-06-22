
var basePath 			= "js/"; 
var pagesPath 			= "pages/"; 
var modulesPath 		= "modules/"; 
var bowerComponentsPath = "../bower_components/"; 

requirejs.config({
    
    /**
     * JQuery e Bootstrap são dependências máximas do projeto, ou seja, todos os outros módulos e pluguins 
     * só serão carregados depois desses dois.
     */
    shim: {
        '*': ['jquery', 'bootstrap']
    },

    "baseUrl": basePath,
    "paths": {
        "jquery"		:bowerComponentsPath 	+ "jquery/dist/jquery.min",
        "bootstrap"		:bowerComponentsPath 	+ "bootstrap/dist/js/bootstrap.min",
        "fastclick"		:bowerComponentsPath 	+ "fastclick/lib/fastclick",
        "slimscroll"	:bowerComponentsPath 	+ "jquery-slimscroll/jquery.slimscroll.min",
        "handlebars"    :bowerComponentsPath    + "handlebars/handlebars.min",
        "adminlte"		:"adminlte/app.min",
        "demo"			:"adminlte/demo",
    }
});

// Chamando módulo principal para iniciar a aplicação
if (requirejs_page)
	requirejs([requirejs_page]);