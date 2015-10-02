(function(){
    angular
        .module('blogApp')
        .filter('range', range);

    function range(){
        return function(input, total){
            total = Math.ceil(total);

            for (var i=0; i<total; i++) {
                input.push(i);
            }

            return input;
        }
    }
})();