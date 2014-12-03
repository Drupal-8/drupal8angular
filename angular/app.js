var app = angular.module( "app", [] );

app.controller(
  "Demo",
  function( $scope, NodeService ) {

    NodeService.getNodes()
      .then(
      function( nodes ) {
        $scope.nodes = nodes;
        console.log($scope.nodes);
      }
    );
  }
);

app.service(
  "NodeService",
  function( $http, $q ) {

    this.getNodes = function() {
      var request = $http({
        method: "get",
        url: "http://drup8.localhost.com/nodes"
      });
      return( request.then( handleSuccess ) );
    }

    function handleSuccess( response ) {
      return( response.data );
    }
  }
);
 