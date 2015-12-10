$(function(){
$('.to_cart').on('click',function(){
    $post('/ajax/toCart',
        {id: $(this).attr('data-id')},
        function (data){
            alert('data')
            })
});
});