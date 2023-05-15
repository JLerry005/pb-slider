

let $ = jQuery.noConflict();

$(document).ready(function($){
    let posts = $(".slider--container");

    if(posts[0] === posts[0]){
        $(posts[0]).show();
        $(posts[1]).hide();
        $(posts[2]).hide();
        console.log("run")
    } else {
        $(posts).hide();
        console.log("hide")
    }

    let counter = 0;

    setInterval(() => {
        if( counter < posts.length ){
            $(posts).hide();
            $(posts[counter]).show();
            counter++
        } else {
            counter = 0;
        }

    }, 3000);
    
    $(".next-button").click(function(e){
        // e.preventDefault();
    
        if( counter < posts.length ){
            
            $(posts).hide();
            $(posts[counter]).show();
            counter++
        } else {
            counter = 0;
        }
        
        console.log(counter + 'next');
    })

    $(".prev-button").click(function(e){
        // e.preventDefault();

        if( counter <= posts.length ){
            
            $(posts).hide();
            $(posts[counter]).show();
            counter-=1

        } else if(counter < 0){
            counter = 0;
            $(posts[counter]).show();
        } 
        console.log(counter + 'prev');
    })   
})