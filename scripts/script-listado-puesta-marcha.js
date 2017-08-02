$("select").change(function(){
    if(this.value == "porcina") {
        $(".opciones-porcinos").css("display", "flex");
        $(".ep-porcino").css("display", "initial");
        $(".ep-avicola").css("display", "none");
        $("input[type='radio']").removeAttr("checked");
    }
    else if (this.value == "avicola") {
        $(".opciones-porcinos").css("display", "none");
        $(".ep-porcino").css("display", "none");
        $(".ep-avicola").css("display", "initial");
        $("input[type='radio']").removeAttr("checked");
    }
});