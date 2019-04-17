function mouse_move(value)
{
    if (value == 'go') {
        document.all.text1.value = window.event.x + ',' + window.event.y;
    }
    else {
        document.all.text1.value = '';
    }
}