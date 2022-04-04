var i = 0;

function wCount() {
  i = i + 1;
  postMessage(i);
  setTimeout("wCount()",500);
}

wCount(); 