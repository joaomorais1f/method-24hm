var year = document.querySelector('input[name=year]').value;
var month = document.querySelector('input[name=month]').value;
var divs = document.getElementsByClassName('card');
const all_content = document.getElementsByClassName('all-contents')
function getDaysInMonth(month, year) {
    var date = new Date(year, month, 1);
    var days = [];
    while (date.getMonth() === month) {
        days.push(new Date(date));
        date.setDate(date.getDate() + 1);
    }
    return days;
}

const days_to_for = getDaysInMonth(parseInt(month), year);
