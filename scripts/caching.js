window.cache = function(key, value){
    if(value === 'undefined'){
        return window.cache[key];
    }
    window.cache[key] = value;
};
