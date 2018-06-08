var currentMousePos = { x: -1, y: -1 };
  $(document).mousemove(function(event) {
      currentMousePos.x = event.pageX;
      currentMousePos.y = event.pageY;
  });



function showApartmentInfo(appartmentInfo)
{
  var appartmentArr = appartmentInfo.split("|");
  //alert(appartmentArr[0]);

  $('#appInfoRooms').text(appartmentArr[0]);
  $('#appInfoSquare').text(appartmentArr[1]);
  $('#appInfoLivingSquare').text(appartmentArr[2]);
  $('#appInfoFloor').text(appartmentArr[3]);

  var divInfoLeftPos = currentMousePos.x - $('#appInfo').width() - 20;
  var divInfoTopPos = currentMousePos.y - $('#appInfo').height() - 20;

  $('#appInfo').css( {left:divInfoLeftPos});
  $('#appInfo').css( {top:divInfoTopPos});

  //$('#appInfo').css( {visibility:'visible'});

}

function showApartmentDiv()
{
  if($(window).width() > 1000)
  {
    $('#appInfo').css( {visibility:'visible'});
    $('#appInfo').css( {display:'block'});
  }
}

function hideApartmentDiv()
{
  if($(window).width() > 1000)
  {
    $('#appInfo').css( {visibility:'hidden'});
    $('#appInfo').css( {display:'none'});
  }
};

function setfloorpick(pic)

{
  $('#btn35').removeClass("btn-floor-active");
  $('#btn610').removeClass("btn-floor-active");
  $('#btn1115').removeClass("btn-floor-active");
  $('#btn1621').removeClass("btn-floor-active");

  if(pic == 35)
  {
    $('#floor1621-div').css("display", "none");
    $('#floor1115-div').css("display", "none");
    $('#floor610-div').css("display", "none");
    $('#floor35-div').css("display", "block");
    $('#btn35').addClass("btn-floor-active");
    // $('.map').maphilight( { stroke: false } );
  }
  else if(pic == 610)
  {
    $('#floor610-div').css("display", "block");
    $('#floor35-div').css("display", "none");
    $('#floor1115-div').css("display", "none");
    $('#floor1621-div').css("display", "none");
    // $('.map').maphilight( { stroke: false } );

    $('#btn610').addClass("btn-floor-active");
  }
  else if(pic == 1115)
  {
    $('#floor610-div').css("display", "none");
    $('#floor35-div').css("display", "none");
    $('#floor1621-div').css("display", "none");
    $('#floor1115-div').css("display", "block");
    // $('.map').maphilight( { stroke: false } );
    $('#btn1115').addClass("btn-floor-active");
  }
  else if(pic == 1621)
  {
    $('#floor610-div').css("display", "none");
    $('#floor35-div').css("display", "none");
    $('#floor1621-div').css("display", "block");
    $('#floor1115-div').css("display", "none");
    // $('.map').maphilight( { stroke: false } );
    $('#btn1621').addClass("btn-floor-active");
  }
}
