window.onload = () => {
    var year = document.querySelector('input[name=year]').value;
    var month = document.querySelector('input[name=month]').value;
    console.log(year);
    const icons = document.getElementsByClassName('span-icons');
    const spans = document.querySelectorAll('span.content-title');

    // for (var i = 0; i < icons.length; i++) {
    //     icons[i].addEventListener("click", (event) => {
    //         var iconclicked = event.target;
    //         const spanicon = iconclicked.closest('span');
            
    //         console.log(findIndex(spanicon))
    //         console.log(iconclicked)
    //         console.log(spanicon)
    //                 //spans[i].style.textDecoration = "line-through";
    //     }, false);
    // }

    function getDaysInMonth(month, year) {
        var date = new Date(year, month, 1);
        var days = [];
        while (date.getMonth() === month) {
            days.push(new Date(date));
            date.setDate(date.getDate() + 1);
        }
        return days;
    }

    // $days = $getDaysInMonth();
}
