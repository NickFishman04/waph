function drawClock() {
  var canvas = document.getElementById("analog-clock");
  var ctx = canvas.getContext("2d");
  var now = new Date();
  var sec = now.getSeconds();
  var min = now.getMinutes();
  var hr  = now.getHours() % 12;
  var cx = 100, cy = 100, r = 90;

  ctx.clearRect(0, 0, 200, 200);

  // Clock face
  ctx.beginPath();
  ctx.arc(cx, cy, r, 0, 2 * Math.PI);
  ctx.fillStyle = "white";
  ctx.fill();
  ctx.strokeStyle = "black";
  ctx.lineWidth = 3;
  ctx.stroke();

  // Hour hand
  var hrAngle = ((hr + min/60) / 12) * 2 * Math.PI - Math.PI/2;
  drawHand(ctx, cx, cy, hrAngle, 50, 6, "black");

  // Minute hand
  var minAngle = ((min + sec/60) / 60) * 2 * Math.PI - Math.PI/2;
  drawHand(ctx, cx, cy, minAngle, 70, 4, "black");

  // Second hand
  var secAngle = (sec / 60) * 2 * Math.PI - Math.PI/2;
  drawHand(ctx, cx, cy, secAngle, 80, 2, "red");
}

function drawHand(ctx, cx, cy, angle, length, width, color) {
  ctx.beginPath();
  ctx.moveTo(cx, cy);
  ctx.lineTo(cx + length * Math.cos(angle), cy + length * Math.sin(angle));
  ctx.strokeStyle = color;
  ctx.lineWidth = width;
  ctx.stroke();
}

setInterval(drawClock, 1000);
drawClock();
