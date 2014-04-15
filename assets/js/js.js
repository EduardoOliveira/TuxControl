$(document).ready(function () {
    $(".tip").tooltip({
        placement: "top"
    });
    $(".tipb").tooltip({
        placement: "bottom"
    });
    $(".tipl").tooltip({
        placement: "left"
    });
    $(".tipr").tooltip({
        placement: "right"
    });
    if ($("#layout_scroll").length > 0) {
        $("#layout_scroll").height($(window).height() - 80)
    }
    if ($(".scroll").length > 0) {
        $(".scroll").mCustomScrollbar()
    }
    $(".modal").on("shown.bs.modal", function () {
        $(this).find(".scroll").mCustomScrollbar("update")
    });
    if ($(".scroll-mail").length > 0) {
        $(".scroll-mail").height($(window).height() - 185).mCustomScrollbar()
    }
    if ($(".accordion").length > 0) {
        $(".accordion").accordion({
            heightStyle: "content"
        });
        $(".accordion .ui-accordion-header:last").css("border-bottom", "0px")
    }
    if ($("input[type=checkbox]").length > 0 || $("input[type=radio]").length > 0) {
        $("input[type=checkbox], input[type=radio]").not(".ibutton").uniform()
    }
    if ($(".select2").length > 0) {
        $(".select2").select2()
    }
    if ($(".tags").length > 0) {
        $(".tags").tagsInput({
            width: "100%",
            height: "auto"
        })
    }
    if ($(".mail_tags").length > 0) {
        $(".mail_tags").tagsInput({
            width: "100%",
            height: "auto",
            defaultText: "add email"
        })
    }
    if ($(".datepicker").length > 0) {
        $(".datepicker").datepicker({
            nextText: "",
            prevText: ""
        })
    }
    if ($(".mdatepicker").length > 0) {
        $(".mdatepicker").datepicker({
            numberOfMonths: 3,
            nextText: "",
            prevText: ""
        })
    }
    if ($(".timepicker").length > 0) {
        $(".timepicker").timepicker()
    }
    if ($(".datetimepicker").length > 0) {
        $(".datetimepicker").datetimepicker({
            nextText: "",
            prevText: ""
        })
    }
    if ($(".ibutton").length > 0) {
        $(".ibutton:radio, .ibutton:checkbox").iButton()
    }
    if ($(".knob").length > 0) {
        $(".knob input").knob()
    }
    if ($(".sparkline").length > 0) {
        $(".sparkline span").sparkline("html", {
            enableTagOptions: true
        })
    }
    if ($(".cle").length > 0) {
        cE = $(".cle").cleditor({
            width: "100%",
            height: 230
        })
    }
    if ($(".cleditor").length > 0) {
        cEdit = $(".cleditor").cleditor({
            width: "100%",
            height: 450
        })
    }
    if ($(".scle").length > 0) {
        cEC = $(".scle").cleditor({
            width: "100%",
            height: 230,
            controls: "bold italic underline strikethrough link unlink"
        })[0].focus()
    }
    $("#modal_mail").on("shown.bs.modal", function () {
        cEC.refresh()
    });
    if ($(".modal-draggable").length > 0) {
        $(".modal-draggable").draggable()
    }
    if ($("textarea.tmce").length > 0) {
        tinymce.init({
            selector: "textarea.tmce",
            height: 400
        })
    }
    if ($("textarea.stmce").length > 0) {
        tinymce.init({
            selector: "textarea.stmce",
            toolbar: "bold italic | alignleft aligncenter alignright alignjustify | undo redo",
            menu: [],
            height: 200
        })
    }
    if ($("#validate").length > 0 || $("#validate_custom").length > 0) {
        $("#validate, #validate_custom").validationEngine("attach", {
            promptPosition: "topLeft"
        })
    }
    if ($("#wizard").length > 0) {
        $("#wizard").stepy()
    }
    if ($("#wizard_validate").length > 0) {
        $("#wizard_validate").validationEngine("attach", {
            promptPosition: "topLeft"
        });
        $("#wizard_validate").stepy({
            back: function (d) {},
            next: function (d) {
                if (!$("#wizard_validate").validationEngine("validate")) {
                    return false
                }
            },
            finish: function (d) {
                if (!$("#wizard_validate").validationEngine("validate")) {
                    return false
                }
            }
        })
    }
    if ($("input[class^='mask_']").length > 0) {
        $("input.mask_tin").mask("99-9999999");
        $("input.mask_ssn").mask("999-99-9999");
        $("input.mask_date").mask("9999-99-99");
        $("input.mask_product").mask("a*-999-a999");
        $("input.mask_phone").mask("99 (999) 999-99-99");
        $("input.mask_phone_ext").mask("99 (999) 999-9999? x99999");
        $("input.mask_credit").mask("9999-9999-9999-9999");
        $("input.mask_percent").mask("99%")
    }
    if ($("pre[class^=brush]").length > 0) {
        SyntaxHighlighter.defaults.toolbar = false;
        SyntaxHighlighter.all()
    }
    if ($(".fancybox").length > 0) {
        $(".fancybox").fancybox({
            padding: 10
        })
    }
    if ($(".carousel").length > 0) {
        $(".carousel").carousel()
    }
    if ($("#calendar").length > 0) {
        var b = new Date();
        var e = b.getDate();
        var a = b.getMonth();
        var f = b.getFullYear();
        $("#external-events .external-event").each(function () {
            var d = {
                title: $.trim($(this).text())
            };
            $(this).data("eventObject", d);
            $(this).draggable({
                zIndex: 999,
                revert: true,
                revertDuration: 0
            })
        });
        var c = $("#calendar").fullCalendar({
            header: {
                left: "prev,next today",
                center: "title",
                right: "month,agendaWeek,agendaDay"
            },
            editable: true,
            events: [{
                title: "All Day Event",
                start: new Date(f, a, 1)
            }, {
                title: "Long Event",
                start: new Date(f, a, e - 5),
                end: new Date(f, a, e - 2)
            }, {
                id: 999,
                title: "Repeating Event",
                start: new Date(f, a, e - 3, 16, 0),
                allDay: false
            }, {
                id: 999,
                title: "Repeating Event",
                start: new Date(f, a, e + 4, 16, 0),
                allDay: false
            }, {
                title: "Meeting",
                start: new Date(f, a, e, 10, 30),
                allDay: false
            }, {
                title: "Lunch",
                start: new Date(f, a, e, 12, 0),
                end: new Date(f, a, e, 14, 0),
                allDay: false
            }, {
                title: "Birthday Party",
                start: new Date(f, a, e + 1, 19, 0),
                end: new Date(f, a, e + 1, 22, 30),
                allDay: false
            }, {
                title: "Click for Google",
                start: new Date(f, a, 28),
                end: new Date(f, a, 29),
                url: "http://google.com/"
            }],
            droppable: true,
            selectable: true,
            selectHelper: true,
            select: function (j, d, g) {
                var h = prompt("Event Title:");
                if (h) {
                    c.fullCalendar("renderEvent", {
                        title: h,
                        start: j,
                        end: d,
                        allDay: g
                    }, true)
                }
                c.fullCalendar("unselect")
            },
            drop: function (h, j) {
                var g = $(this).data("eventObject");
                var d = $.extend({}, g);
                d.start = h;
                d.allDay = j;
                $("#calendar").fullCalendar("renderEvent", d, true);
                if ($("#drop-remove").is(":checked")) {
                    $(this).remove()
                }
            }
        })
    }
    $("[data-toggle=popover]").popover();
    $(".slider_example").slider({
        range: "min",
        min: 0,
        max: 100,
        value: 50
    });
    $(".slider_example2").slider({
        range: true,
        min: 0,
        max: 500,
        values: [150, 350]
    });
    $(".slider_example3").slider({
        orientation: "vertical",
        range: "min",
        min: 0,
        max: 100,
        value: 50
    });
    $(".slider_example4").slider({
        orientation: "vertical",
        min: 0,
        max: 500,
        range: true,
        values: [150, 350]
    });
    if ($("#price_rage").length > 0) {
        $("#price_rage").slider({
            range: true,
            min: 0,
            max: 3000,
            values: [1000, 2000],
            slide: function (d, g) {
                $("#price_amount").html("$" + g.values[0] + " - $" + g.values[1])
            }
        });
        $("#price_amount").html("$" + $("#price_rage").slider("values", 0) + " - $" + $("#price_rage").slider("values", 1))
    }
    $("#spinner").spinner();
    $("#spinner2").spinner({
        step: 0.1
    });
    $("#spinner3").spinner({
        min: 0,
        max: 2500,
        step: 25.15,
        numberFormat: "C"
    });
    $("#fat-btn").click(function () {
        var d = $(this);
        d.button("loading");
        setTimeout(function () {
            d.button("reset")
        }, 3000)
    });
    if ($("#sortable_example_1").length > 0) {
        $("#sortable_example_1").sortable({
            items: ".list-group-item"
        });
        $("#sortable_example_1").disableSelection()
    }
    if ($("#selectable_example_1").length > 0) {
        $("#selectable_example_1").selectable()
    }
});
$(window).resize(function () {
    if ($("#layout_scroll").length > 0) {
        $("#layout_scroll").height($(window).height() - 80).mCustomScrollbar("update")
    }
    if ($(".scroll-mail").length > 0) {
        $(".scroll-mail").height($(window).height() - 205).mCustomScrollbar("update")
    }
});
$(document).ready(function () {
    $(".modal-ajax").click(function () {
        $("#modal_ajax").find(".modal-title").html($(this).attr("data-title"));
        $("#modal_ajax").find(".modal-body").load($(this).attr("href"));
        $("#modal_ajax").modal("show");
        lists();
        return false
    });
    $(".modal-wide").click(function () {
        var a = $(this).attr("href");
        $(a).on("show.bs.modal", function () {
            $(this).find(".modal-dialog").css({
                width: $(window).width() - 30,
                height: $(window).height(),
                "padding-top": 15,
                "padding-bottom": 15
            })
        });
        $(a).on("shown.bs.modal", function () {
            $(this).find(".scroll").height($(window).height() - 105).mCustomScrollbar("update")
        });
        $(a).modal("show")
    });
    $(".tasks_view_block").click(function () {
        $(".tasks").removeClass("tasks_list")
    });
    $(".tasks_view_list").click(function () {
        $(".tasks").addClass("tasks_list")
    });
    $(".page-sidebar").hover(function () {
        if ($(".page-container").hasClass("page-sidebar-narrow")) {
            $(this).css("width", 230);
            $(".page-content").css("margin-left", 230);
            $(".page-navigation-hide").css("display", "block")
        }
    }, function () {
        if ($(".page-container").hasClass("page-sidebar-narrow")) {
            $(this).removeAttr("style");
            $(".page-content").removeAttr("style");
            $(".page-navigation-hide").removeAttr("style");
            $(".page-navigation li ul").removeAttr("style")
        }
    });
    $(".psn-control").click(function () {
        if ($(".page-container").hasClass("page-sidebar-narrow")) {
            $(".page-container").removeClass("page-sidebar-narrow");
            $(this).parent(".control").removeClass("active")
        } else {
            $(".page-container").addClass("page-sidebar-narrow");
            $(this).parent(".control").addClass("active")
        }
        return false
    });
    $(".page-navigation li a").click(function () {
        var a = $(this).parent("li").children("ul");
        if (a.length == 1) {
            if (a.is(":visible")) {
                a.slideUp("fast")
            } else {
                a.slideDown("fast")
            }
            return false
        }
    });
    $(".block-remove").click(function () {
        $(this).parents(".block").fadeOut("slow", function () {
            $(this).remove()
        });
        return false
    });
    $(".block-toggle").click(function () {
        var a = $(this).parents(".block").children("div").not(".header");
        if (a.is(":visible")) {
            a.slideUp();
            $(this).find("span").removeClass("icon-chevron-down").addClass("icon-chevron-up")
        } else {
            a.slideDown();
            $(this).find("span").removeClass("icon-chevron-up").addClass("icon-chevron-down")
        }
        return false
    });
    $(".file .btn,.file input:text").click(function () {
        var a = $(this).parents(".file");
        a.find("input:file").click();
        a.find("input:file").change(function () {
            a.find("input:text").val(a.find("input:file").val())
        })
    });
    $(".user-change-button").click(function () {
        $(this).parents(".block").find(".user-change").animate({
            opacity: 0
        }, 400, function () {
            $(this).find("img").attr("src", "img/user.jpg");
            $(this).animate({
                opacity: 1
            }, 400)
        });
        $(this).parents(".block").find(".user-change-row").fadeIn(800);
        $(this).remove()
    });
    $("table .checkall").click(function () {
        var b = $(this).parents("th").index();
        var a = $(this).parents("table").find("tbody");
        if ($(this).is(":checked")) {
            a.find("tr").each(function () {
                var c = $(this).find("td:eq(" + b + ") input:checkbox");
                c.parent("span").addClass("checked");
                c.attr("checked", false)
            })
        } else {
            a.find("tr").each(function () {
                var c = $(this).find("td:eq(" + b + ") input:checkbox");
                c.parent("span").removeClass("checked");
                c.attr("checked", false)
            })
        }
    });
    $(".stbar, .statusbar-close").click(function () {
        statusbar($(this).attr("href"));
        return false
    });
    $(".ui-spinner").find("span").html("");
    $(".icons-list .col-md-3").click(function () {
        var c = $(this).html();
        var b = /<(\w+)[^>]*>.*<\/\1>/gi;
        var a = $.trim(c.replace(b, ""));
        $("#modal_icon .modal-body .list").html('<div class="list-item"><div class="list-text"><p>&lt;i class="' + a + '">&lt;/i></p></div></div><div class="list-item"><div class="list-text"><p>&lt;span class="' + a + '">&lt;/span></p></div></div><div class="list-item"><div class="list-text"><p>.' + a + "</p></div></div>");
        $("#modal_icon .modal-body .icons-list-icon").html("").append('<span class="' + a + '"></span>');
        $("#modal_icon").modal("show")
    })
});
$(window).bind("load", function () {
    gallery();
    thumbs();
    lists();
    page()
});
$(window).resize(function () {
    $(".nav-tabs-vertical").each(function () {
        var a = $(this).find(".nav-tabs").height();
        $(this).find(".tabs").css("min-height", a)
    });
    gallery();
    thumbs();
    lists();
    page()
});

function page() {
    if ($("body").width() < 768) {
        $(".page-container").addClass("page-sidebar-narrow");
        $(".page-navigation li ul").removeAttr("style")
    }
}

function lists() {
    $(".list").each(function () {
        var a = $(this).find(".list-controls");
        if (a.length > 0) {
            a.each(function () {
                $(this).height($(this).parent(".list-item").height() - 10).css("line-height", $(this).parent(".list-item").height() - 10 + "px")
            })
        }
    })
}

function gallery() {
    var d = $(".gallery").width() - 20;
    var c = $(".gallery a").width();
    var a = Math.floor(d / c);
    var b = Math.round((d - c * a) / (a * 2));
    if (d < (b * 2 + c) * a) {
        b = b - 1
    }
    $(".gallery a").css("margin", b + 2)
}

function thumbs() {
    $(".gallery-list").each(function () {
        var e = 0;
        var f = 0;
        $(this).find(".gallery-item").each(function () {
            var g = $(this).find("a > img").height();
            var h = $(this).find(".text").height();
            e = e < g ? g : e;
            f = f < h ? h : f
        });
        $(this).find(".gallery-list .gallery-image").height(e);
        $(this).find(".gallery-list .gallery-content .text").height(f)
    });
    var d = $(".gallery-list").width();
    var c = $(".gallery-list .gallery-item").width() + 10;
    var a = Math.floor(d / c);
    var b = Math.floor(((d - (c * a)) / a) / 2);
    $(".gallery-list .gallery-item").css("margin", b)
}

function statusbar(a) {
    $(".statusbar").hide();
    if ($(a).is(":hidden")) {
        $(a).fadeIn()
    }
}

function tsp(c, b, e) {
    $("#tsp").remove();
    var d = null;
    if ($.isArray(c)) {
        d = c;
        c = c[0]
    }
    var a = '<div id="tsp"' + (e != null ? ' class="tsp-' + e + '"' : "") + '><div class="tsp-progress' + (b != null ? " tsp-" + b : "") + '" style="width:' + c + '%;"></div></div>';
    $("body").append(a);
    if (d !== null) {
        i = d[0];
        timer = setInterval(function () {
            $("#tsp .tsp-progress").css("width", i + "%");
            i++;
            if (i > d[1]) {
                clearInterval(timer)
            }
        }, 20)
    }
}
$(document).ready(function () {
    if ($("#dash_chart_1").length > 0) {
        var u = [
            [1, 25],
            [2, 28],
            [3, 22],
            [4, 18],
            [5, 30],
            [6, 18],
            [7, 14]
        ];
        var c = $.plot($("#dash_chart_1"), [{
            data: u,
            label: "Sales"
        }], {
            series: {
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            grid: {
                hoverable: true,
                clickable: true,
                margin: {
                    left: 110
                }
            },
            xaxis: {
                ticks: [
                    [1, "Mon"],
                    [2, "Tue"],
                    [3, "Wed"],
                    [4, "Thu"],
                    [5, "Fri"],
                    [6, "Sat"],
                    [7, "Sun"]
                ]
            },
            legend: {
                show: false
            }
        })
    }
    if ($("#dash_chart_2").length > 0) {
        var k = [
            [1, 1023],
            [2, 1244],
            [3, 1506],
            [4, 1330],
            [5, 1065],
            [6, 890],
            [7, 650]
        ];
        var h = [
            [1, 868],
            [2, 1485],
            [3, 1355],
            [4, 1002],
            [5, 1200],
            [6, 755],
            [7, 800]
        ];
        var b = $.plot($("#dash_chart_2"), [{
            data: k,
            label: "Search Traffic"
        }, {
            data: h,
            label: "Referal Traffic"
        }], {
            series: {
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            grid: {
                hoverable: true,
                clickable: true
            },
            xaxis: {
                max: 7,
                ticks: [
                    [1, "Mon"],
                    [2, "Tue"],
                    [3, "Wed"],
                    [4, "Thu"],
                    [5, "Fri"],
                    [6, "Sat"],
                    [7, "Sun"]
                ]
            }
        })
    }
    if ($("#chart_line_1").length > 0) {
        var a = [],
            d = [],
            o = [];
        for (var s = 0; s < 14; s += 0.3) {
            a.push([s, Math.sin(s)]);
            o.push([s, Math.sin(s - 1.57)]);
            d.push([s, Math.cos(s)])
        }
        var t = $.plot($("#chart_line_1"), [{
            data: a,
            label: "sin(x)"
        }, {
            data: d,
            label: "cos(x)"
        }, {
            data: o,
            label: "sin(y)"
        }], {
            series: {
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            grid: {
                hoverable: true,
                clickable: true
            },
            yaxis: {
                min: -1.1,
                max: 1.1
            }
        })
    }
    if ($("#chart_bar_1").length > 0) {
        var k = [
            [1, 25],
            [2, 28],
            [3, 22],
            [4, 18],
            [5, 30],
            [6, 18]
        ];
        var h = [
            [1, 15],
            [2, 22],
            [3, 16],
            [4, 12],
            [5, 25],
            [6, 7]
        ];
        var f = [
            [1, 10],
            [2, 16],
            [3, 10],
            [4, 6],
            [5, 18],
            [6, 3]
        ];
        var q = $.plot($("#chart_bar_1"), [{
            data: k,
            label: "Data 1"
        }, {
            data: h,
            label: "Data 2"
        }, {
            data: f,
            label: "Data 3"
        }], {
            series: {
                stack: 0,
                bars: {
                    show: true,
                    barWidth: 0.8,
                    align: "center"
                }
            },
            grid: {
                hoverable: true,
                clickable: true
            }
        })
    }
    if ($("#chart_bar_2").length > 0) {
        var p = $.plot($("#chart_bar_2"), [{
            data: k,
            label: "Data 1"
        }, {
            data: h,
            label: "Data 2"
        }, {
            data: f,
            label: "Data 3"
        }], {
            series: {
                stack: 0,
                lines: {
                    show: true,
                    fill: true
                },
                bars: {
                    show: false
                }
            },
            grid: {
                hoverable: true,
                clickable: true
            }
        })
    }
    if ($("#chart_pie_1").length > 0) {
        var u = [];
        u[0] = {
            label: "Data 1",
            data: 40
        };
        u[1] = {
            label: "Data 2",
            data: 30
        };
        u[2] = {
            label: "Data 3",
            data: 30
        };
        $.plot("#chart_pie_1", u, {
            series: {
                pie: {
                    radius: 1,
                    show: true,
                    label: {
                        show: true,
                        radius: 2 / 3,
                        formatter: j,
                        threshold: 0.1
                    }
                }
            },
            legend: {
                show: false
            }
        })
    }
    if ($("#chart_user_1").length > 0) {
        var k = [
            [1, 45],
            [2, 35],
            [3, 57],
            [4, 75],
            [5, 80]
        ];
        var h = [
            [1, 55],
            [2, 65],
            [3, 43],
            [4, 25],
            [5, 20],
            [6, 75],
            [7, 85]
        ];
        var f = [
            [6, 25],
            [7, 15]
        ];
        var n = $.plot($("#chart_user_1"), [{
            data: k,
            label: "Leo"
        }, {
            data: h,
            label: "Taurus"
        }, {
            data: f,
            label: "Aries"
        }], {
            series: {
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            grid: {
                hoverable: true,
                clickable: true
            },
            xaxis: {
                max: 7,
                ticks: [
                    [1, "Mon"],
                    [2, "Tue"],
                    [3, "Wed"],
                    [4, "Thu"],
                    [5, "Fri"],
                    [6, "Sat"],
                    [7, "Sun"]
                ]
            }
        })
    }
    if ($("#chart_series_onoff").length > 0) {
        var l = {
            usa: {
                label: "USA",
                data: [
                    [1988, 483994],
                    [1989, 479060],
                    [1990, 457648],
                    [1991, 401949],
                    [1992, 424705],
                    [1993, 402375],
                    [1994, 377867],
                    [1995, 357382],
                    [1996, 337946],
                    [1997, 336185],
                    [1998, 328611],
                    [1999, 329421],
                    [2000, 342172],
                    [2001, 344932],
                    [2002, 387303],
                    [2003, 440813],
                    [2004, 480451],
                    [2005, 504638],
                    [2006, 528692]
                ]
            },
            russia: {
                label: "Russia",
                data: [
                    [1988, 218000],
                    [1989, 203000],
                    [1990, 171000],
                    [1992, 42500],
                    [1993, 37600],
                    [1994, 36600],
                    [1995, 21700],
                    [1996, 19200],
                    [1997, 21300],
                    [1998, 13600],
                    [1999, 14000],
                    [2000, 19100],
                    [2001, 21300],
                    [2002, 23600],
                    [2003, 25100],
                    [2004, 26100],
                    [2005, 31100],
                    [2006, 34700]
                ]
            },
            uk: {
                label: "UK",
                data: [
                    [1988, 62982],
                    [1989, 62027],
                    [1990, 60696],
                    [1991, 62348],
                    [1992, 58560],
                    [1993, 56393],
                    [1994, 54579],
                    [1995, 50818],
                    [1996, 50554],
                    [1997, 48276],
                    [1998, 47691],
                    [1999, 47529],
                    [2000, 47778],
                    [2001, 48760],
                    [2002, 50949],
                    [2003, 57452],
                    [2004, 60234],
                    [2005, 60076],
                    [2006, 59213]
                ]
            },
            germany: {
                label: "Germany",
                data: [
                    [1988, 55627],
                    [1989, 55475],
                    [1990, 58464],
                    [1991, 55134],
                    [1992, 52436],
                    [1993, 47139],
                    [1994, 43962],
                    [1995, 43238],
                    [1996, 42395],
                    [1997, 40854],
                    [1998, 40993],
                    [1999, 41822],
                    [2000, 41147],
                    [2001, 40474],
                    [2002, 40604],
                    [2003, 40044],
                    [2004, 38816],
                    [2005, 38060],
                    [2006, 36984]
                ]
            },
            denmark: {
                label: "Denmark",
                data: [
                    [1988, 3813],
                    [1989, 3719],
                    [1990, 3722],
                    [1991, 3789],
                    [1992, 3720],
                    [1993, 3730],
                    [1994, 3636],
                    [1995, 3598],
                    [1996, 3610],
                    [1997, 3655],
                    [1998, 3695],
                    [1999, 3673],
                    [2000, 3553],
                    [2001, 3774],
                    [2002, 3728],
                    [2003, 3618],
                    [2004, 3638],
                    [2005, 3467],
                    [2006, 3770]
                ]
            },
            sweden: {
                label: "Sweden",
                data: [
                    [1988, 6402],
                    [1989, 6474],
                    [1990, 6605],
                    [1991, 6209],
                    [1992, 6035],
                    [1993, 6020],
                    [1994, 6000],
                    [1995, 6018],
                    [1996, 3958],
                    [1997, 5780],
                    [1998, 5954],
                    [1999, 6178],
                    [2000, 6411],
                    [2001, 5993],
                    [2002, 5833],
                    [2003, 5791],
                    [2004, 5450],
                    [2005, 5521],
                    [2006, 5271]
                ]
            },
            norway: {
                label: "Norway",
                data: [
                    [1988, 4382],
                    [1989, 4498],
                    [1990, 4535],
                    [1991, 4398],
                    [1992, 4766],
                    [1993, 4441],
                    [1994, 4670],
                    [1995, 4217],
                    [1996, 4275],
                    [1997, 4203],
                    [1998, 4482],
                    [1999, 4506],
                    [2000, 4358],
                    [2001, 4385],
                    [2002, 5269],
                    [2003, 5066],
                    [2004, 5194],
                    [2005, 4887],
                    [2006, 4891]
                ]
            }
        };
        var s = 0;
        $.each(l, function (v, w) {
            w.color = s;
            ++s
        });
        var g = $("#choices");
        g.find("input").click(m);

        function m() {
            var v = [];
            g.find("input:checked").each(function () {
                var w = $(this).attr("name");
                if (w && l[w]) {
                    v.push(l[w])
                }
            });
            if (v.length > 0) {
                $.plot("#chart_series_onoff", v, {
                    yaxis: {
                        min: 0
                    },
                    xaxis: {
                        tickDecimals: 0
                    }
                })
            }
        }
        m()
    }

    function j(v, w) {
        return "<div style='text-shadow: 1px 2px 1px rgba(0,0,0,0.2); font-size: 11px; text-align:center; padding:2px; color: #FFF; line-height: 13px;'>" + v + "<br/>" + Math.round(w.percent) + "%</div>"
    }

    function e(v, z, w) {
        $('<div class="ftooltip">' + w + "</div>").css({
            position: "absolute",
            "z-index": "10",
            display: "none",
            top: z - 20,
            left: v,
            padding: "3px",
            "background-color": "rgba(0,0,0,0.5)",
            "font-size": "11px",
            "border-radius": "3px",
            color: "#FFF"
        }).appendTo("body").fadeIn(200)
    }
    var r = null;
    $("#chart_bar_1,#chart_bar_2,#chart_line_1,#dash_chart_1,#dash_chart_2,#chart_user_1").bind("plothover", function (z, B, w) {
        $("#x").text(B.x.toFixed(2));
        $("#y").text(B.y.toFixed(2));
        if (w) {
            if (r != w.dataIndex) {
                r = w.dataIndex;
                $(".ftooltip").remove();
                var v = w.datapoint[0].toFixed(2),
                    A = w.datapoint[1].toFixed(2);
                e(w.pageX, w.pageY, w.series.label + ": " + A)
            }
        } else {
            $(".ftooltip").remove();
            r = null
        }
    })
});
$(window).resize(function () {});
$(document).ready(function () {
    if ($("#google_kyiv_map").length > 0) {
        var e = new google.maps.LatLng(50.43, 30.6);
        var r = {
            zoom: 10,
            center: e,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var b = new google.maps.Map(document.getElementById("google_kyiv_map"), r);
        var d = new google.maps.LatLng(50.43, 30.6);
        var h = new google.maps.Marker({
            position: d,
            map: b,
            title: "Office title"
        })
    }
    if ($("#google_world_map").length > 0) {
        var n = new google.maps.LatLng(50, 0);
        var o = {
            zoom: 1,
            center: n,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var q = new google.maps.Map(document.getElementById("google_world_map"), o);
        var c = new google.maps.LatLng(50, 10);
        var j = {
            zoom: 3,
            center: c,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var m = new google.maps.Map(document.getElementById("google_eu_map"), j);
        var l = new google.maps.LatLng(50.43, 30.6);
        var a = {
            zoom: 8,
            center: l,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var p = new google.maps.Map(document.getElementById("google_ptm_map"), a);
        var g = new google.maps.LatLng(50.37, 30.65);
        var f = new google.maps.Marker({
            position: g,
            map: p,
            title: "Marker 1"
        });
        g = new google.maps.LatLng(50.5, 30.55);
        f = new google.maps.Marker({
            position: g,
            map: p,
            title: "Marker 2"
        });
        g = new google.maps.LatLng(50.8, 30.55);
        f = new google.maps.Marker({
            position: g,
            map: p,
            title: "Marker 3"
        });

        function k() {
            var u = new google.maps.Map(document.getElementById("google_search_map"), {
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var t = new google.maps.LatLngBounds(new google.maps.LatLng(-33.8902, 151.1759), new google.maps.LatLng(-33.8474, 151.2631));
            u.fitBounds(t);
            var s = (document.getElementById("target"));
            var w = new google.maps.places.SearchBox(s);
            var v = [];
            google.maps.event.addListener(w, "places_changed", function () {
                var z = w.getPlaces();
                for (var A = 0, y; y = v[A]; A++) {
                    y.setMap(null)
                }
                v = [];
                var B = new google.maps.LatLngBounds();
                for (var A = 0, x; x = z[A]; A++) {
                    var C = {
                        url: x.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };
                    var y = new google.maps.Marker({
                        map: u,
                        icon: C,
                        title: x.name,
                        position: x.geometry.location
                    });
                    v.push(y);
                    B.extend(x.geometry.location)
                }
                u.fitBounds(B)
            });
            google.maps.event.addListener(u, "bounds_changed", function () {
                var x = u.getBounds();
                w.setBounds(x)
            })
        }
        google.maps.event.addDomListener(window, "load", k)
    }
});