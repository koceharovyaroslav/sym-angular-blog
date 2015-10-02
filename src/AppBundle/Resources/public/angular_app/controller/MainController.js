(function(){
    'use strict';
    angular.module('blogApp')
        .controller('indexController', indexController);

    indexController.$inject = ['PostsService'];

    function indexController(PostsService){
        var self = this;
        self.firstPost = 1;
        self.qntPosts = 7;
        self.curentPage = 0;

        function __construct()
        {
            self.paging(0);
        }

        self.paging = function(page)
        {
            PostsService.getPosts(page, self.qntPosts).success(function(posts)
            {
                self.cntPosts = posts.pop();
                self.allPosts = posts;
                self.allPages = self.cntPosts / self.qntPosts;
            });
        };

        __construct();

    }
})();