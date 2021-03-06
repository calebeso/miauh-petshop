$(function( $ ){
    $('.date-time').mask('00/00/0000 00:00:00'); 
});

$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    
    $(".saveEvent").on("click", function(){
        
        let id = $("#modalCalendar input[name='id']").val();
  
        let title = $("#modalCalendar input[name='title']").val();
  
        let start = moment($("#modalCalendar input[name='start']").val(),"DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss");
  
        let end = moment($("#modalCalendar input[name='end']").val(),"DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss");

        let price = $("#modalCalendar input[name='price']").val();

        let color = $("#modalCalendar input[name='color']").val();
  
        let description = $("#modalCalendar textarea[name='description']").val();

        let Event = {
            title: title, 
            start: start, 
            end: end, 
            price: price, 
            color: color, 
            description: description,
        };

        let route; 
        
        if(id == ''){
            route = routeEvents('routeEventStore');
        }else{
            route = routeEvents('routeEventUpdate');
            Event.id = id; 
            Event._method = 'PUT';
        }

        sendEvent(route,Event);

    });
});



function sendEvent(route, data_){
   
    $.ajax({
        url: route, 
        data: data_, 
        method: 'POST',
        dataType: 'json', 
        success:function (json) {
            if(json){
                location.reload();
            }
        },
        error: function(json){
            let responseJSON = json.responseJSON.errors;
            $(".message").html(loadErrors(responseJSON));        }
    });
}

function loadErrors(response) {

    let boxAlert = `<div class="alert alert-danger">`;

    for (let fields in response){
        boxAlert += `<span>${response[fields]}</span><br/>`;
    }

    boxAlert += `</div>`;

    return boxAlert.replace(/\,/g,"<br/>");
}

function clearMessages(element){
    $(element).text('');
}

function routeEvents(route) {
    return document.getElementById('calendar').dataset[route];
}

function resetForm(form){
    $(form)[0].reset();
}
