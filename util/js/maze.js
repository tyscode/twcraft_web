$(".maze_block").click(function (e) { 
    var id = $(this).attr("id");
    var c = document.getElementById(id);
    var ctx = c.getContext("2d");
    ctx.fillStyle = '#000000';
    ctx.arc(4, 4, 3, 0, 2*Math.PI);
    ctx.fill();
    ctx.stroke();
});