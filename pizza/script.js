$(document).ready(function() {
    
    $("#button").click(function() {
    
        var nameAdd = $('input[name=name-item]').val();
        var pizzaAdd = $('input[name=pizza-item]').val();
        
        $(".list").append('<div class="item">' + "<strong>" + nameAdd + "</strong>" + " : " + pizzaAdd + '</div>');
        
    });

});