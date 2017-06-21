
var pagesPath 			= "js/pages/"; 
var modulesPath 		= "../modules/"; 
var bowerComponentsPath = "../../bower_components/"; 

requirejs.config({
    "baseUrl": pagesPath,
    "paths": {
        "jquery": bower_components + "jquery/dist/jquery.min.js",
    }
});

// Chamando módulo principal para iniciar a aplicação
//requirejs(["main"]);