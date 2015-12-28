var myapp = angular.module('myapp', ["ui.router"])
    myapp.config(function($stateProvider){
    $stateProvider
        .state('index', {
            url: "",
            views: {
                "viewA": {
                    templateUrl: "templates/info.html"
                }
            }
        })
        .state('competition', {
            url: "/competition",
            views: {
                "viewA": {
                    templateUrl: "templates/competition.html"
                }
            }
        })
        .state('groups', {
            url: "/groups",
            views: {
                "viewA": {
                    templateUrl: "templates/groups.html"
                }
            }
        })
        .state('news', {
            url: "/news",
            views: {
                "viewA": {
                    templateUrl: "templates/news.html"
                }
            }
        })
        .state('contacts', {
            url: "/contacts",
            views: {
                "viewA": {
                    templateUrl: "templates/contacts.html"
                }
            }
        })
    })
    myapp.run(function ($rootScope, $state) {
        $state.go('index');
        counter=0;
  $rootScope.$on('$stateChangeSuccess',function(){
      counter=counter+1;
      if (counter>1) {
          document.getElementById("content").scrollIntoView();
      }
      /*if ($state.$current == "contacts") {
          initialize();
      }*/
  });
       /* $rootScope.$on('$viewContentLoaded', function(event) {
            if ($state.$current == "contacts") {
      $timeout(function() {
        initialize();
      },0);
    } }); */
        
});
