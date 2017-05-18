function svgToBase64Image(svgElement) {
  var div = document.createElement('div');
  div.appendChild(svgElement.cloneNode(true));
  var b64 = window.btoa(div.innerHTML);
  return 'data:image/svg+xml;base64,' + b64;
}
var svgs = document.getElementsByTagName('svg');
var urls = [];
for (var i = 0; i < svgs.length; i++)
  urls.push('url("' + svgToBase64Image(svgs[i]) + '")');
var url = urls.join(',');
var header = document.getElementsByTagName('header')[0];
header.style.background = url;
var titles = document.querySelectorAll('h2.sectionTitle');
titles.forEach(title => title.style.background = url);
var contact = document.getElementById('contact');
contact.style.background = url;

//header fullpage
var wh = window.innerHeight;
var th = header.offsetHeight-200;
var np = (wh - th)/2;
header.style.paddingBottom = np+'px';
header.style.paddingTop = np+'px';