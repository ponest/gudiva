/**
 * Created by Moses Zengo on 3/17/2017.
 */
$(document).ready(function () {
    $("#register").click(function () {
        $("#form").load('registration.php')
    })
});
/*====panel javascript=======*/
$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
    if(!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('fa fa-angle-up').addClass('fa fa-angle-down');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('fa fa-angle-down').addClass('fa fa-angle-up');
    }
});