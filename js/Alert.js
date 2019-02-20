function Alert(title, content, timeout) {
    this.title = title;
    this.content = content;
    this.timeout = timeout;
    var alertTip =
        '<div class="alert-tip ' + this.title + '">' +
        '<div class="text">' + this.content + '</div>' +
        '</div>';
    $('body').append($(alertTip));
}

Alert.prototype.getTitle = function () {
    return this.title;
}
Alert.prototype.getContent = function () {
    return this.content;
}
Alert.prototype.getTimeout = function () {
    return this.timeout;
}
Alert.prototype.setContent = function (content) {
    this.content = content;
}
Alert.prototype.showAlert = function () {
    var tip = $('.' + this.title);
    var time = parseInt(this.timeout);
    tip.fadeIn(700);
    setTimeout(function () {
        tip.fadeOut(700);
    }, time);
}
