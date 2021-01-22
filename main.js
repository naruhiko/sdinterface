$(function(){
    var randomContent = [];
    $('.randlist li').each(function() {
        randomContent.push($(this).html());
    });

    randomContent.sort(function() {
        return Math.random() - Math.random();
    });

    $('.randlist li').empty();
    i = 0;
    $('.randlist li').each(function() {
        $(this).append(randomContent[i]);
        i++;
    });
});
// randomization thanks for https://qiita.com/daybreak_dawn/items/de47cdd6d9b8e1315c9a


