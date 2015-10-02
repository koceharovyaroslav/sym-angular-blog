(function() {
    angular
        .module('blogApp')
        .factory('PostsService', PostsService);

    PostsService.$inject = ['$http'];


    function PostsService($http) {


        return {
            getPosts: function (page, cnt) {
                var query = {
                    method: 'GET',
                    url: 'api/get-all-posts',
                    params: {
                        firstPost: page,
                        quantity: cnt
                    }
                };

                return $http(query);
            }
        }
    }
})();