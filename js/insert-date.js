//Insert the date in the footer
var today = new Date();
var year = today.getFullYear();
var el = document.querySelector('#copyright');
el.innerHTML = '<p>Copyright &copy;' + year + '  by <strong style="color:deepskyblue;">lweb.com.br</strong> | 11 98281.8927' + '</p>';

