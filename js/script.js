$(function () {

  // fixed header part js
  $(window).scroll(function () {
    let scrolling = $(this).scrollTop();
    if (scrolling > 0) {
      $('.top-header').addClass('fixed');
    } else {
      $('.top-header').removeClass('fixed');
    }
  });

  // dropdown profile js
  let Accordion = function (el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    // Variables privadas
    let links = this.el.find('.link');
    // Evento
    links.on('click', {
      el: this.el,
      multiple: this.multiple
    }, this.dropdown)
  }

  Accordion.prototype.dropdown = function (e) {
    let $el = e.data.el;
    $this = $(this),
      $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('open');

    if (!e.data.multiple) {
      $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
    };
  }

  let accordion = new Accordion($('#accordion'), false);


  // collapsed sidebar js
  $('.control-bar i').click(function () {
    $('body').toggleClass('collapsed-menu');
  })

  $('.mobile-control-bar i').click(function () {
    $('.navigation-body').addClass('show-mobile-sidebar');
    body.style.overflow = "hidden";
  })

  $('.mobile-control-bar i').click(function () {
    $('.toggle-overlay').addClass('show-toggle-overlay');
    body.style.overflow = "hidden";
  })

  $('.close-mobile-menu i').click(function () {
    $('.navigation-body').removeClass('show-mobile-sidebar');
    body.style.overflow = "auto";
  })

  $('.close-mobile-menu i').click(function () {
    $('.toggle-overlay').removeClass('show-toggle-overlay');
    body.style.overflow = "auto";
  })

  $('.toggle-overlay').click(function () {
    $('.toggle-overlay').removeClass('show-toggle-overlay');
    body.style.overflow = "auto";
  })

  $('.toggle-overlay').click(function () {
    $('.navigation-body').removeClass('show-mobile-sidebar');
    body.style.overflow = "auto";
  })

  // Request full screen js
  const arrows = document.querySelector('.fa-arrows-alt')
  const body = document.querySelector('body')

  const toggleFullscreen = () => {
    if (document.fullscreenElement)
      document.exitFullscreen()
    else
      body.requestFullscreen()
  }

  arrows.addEventListener('click', toggleFullscreen)
  const onChange = () => {
    body.className = document.fullscreenElement ? 'fullscreen' : ''
  }
  document.addEventListener('fullscreenchange', onChange)

  // couter up js
  $('.counter').counterUp({
    delay: 30,
    time: 2000
  });


  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

  // two menu hide show js
  // let top_navbar = document.querySelector(".top-navbar");
  // let navigation_body = document.querySelector(".navigation-body");
  // let left_title = document.querySelector(".left-title");
  // let main_content_body = document.querySelector(".main-content-body");

  // left_title.addEventListener("click", () => {
  //   top_navbar.classList.toggle("active-navbar");
  //   navigation_body.classList.toggle("active-navigation-body");
  //   main_content_body.classList.toggle("margin-none")
  // })

  // const ctx = document.getElementById('myChart');
  // new Chart(ctx, {
  //   type: 'pie',
  //   data: {
  //     labels: ['Transfer', 'Leave', 'Proceed', 'Marriage', 'Absent'],
  //     datasets: [{
  //       label: '',
  //       data: [20, 10, 30, 50, 20, ],
  //       borderWidth: 1,
  //     }]
  //   },
  //   options: {
  //     scales: {
  //       y: {
  //         beginAtZero: true
  //       }
  //     }
  //   }
  // });


  // const ctx1 = document.getElementById('myChart1');
  // new Chart(ctx1, {
  //   type: 'bar',
  //   data: {
  //     labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5'],
  //     datasets: [{
  //       label: '',
  //       data: [20, 10, 30, 50, 20, ],
  //       borderWidth: 1
  //     }]
  //   },
  //   options: {
  //     scales: {
  //       y: {
  //         beginAtZero: true
  //       }
  //     }
  //   }
  // });

  // const ctx3 = document.getElementById('myChart3');
  // new Chart(ctx3, {
  //   type: 'pie',
  //   data: {
  //     labels: ['Leave (A)', 'Transfer (B)', 'TY Duty (C)'],
  //     datasets: [{
  //       label: '',
  //       data: [20, 10, 30],
  //       borderWidth: 1
  //     }]
  //   },
  //   options: {
  //     scales: {
  //       y: {
  //         beginAtZero: true
  //       }
  //     }
  //   }
  // });

  // const ctx4 = document.getElementById('myChart4');
  // new Chart(ctx4, {
  //   type: 'bar',
  //   data: {
  //     labels: ['Haji Mahsin', 'Titumir', 'DNST', "DNIT"],
  //     datasets: [{
  //       label: '',
  //       data: [20, 10, 30, 50],
  //       borderWidth: 1
  //     }]
  //   },
  //   options: {
  //     scales: {
  //       y: {
  //         beginAtZero: true
  //       }
  //     }
  //   }
  // });



  $(".category-slide").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 800,
    slidesToShow: 12,
    slidesToScroll: 1,
    autoplay: true,
    // dotsClass: "blog_dots",
    autoplaySpeed: 2000,
    responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

});
// Revenue report
var options = {
  series: [{
      name: 'series1',
      data: [31, 40, 28, 51, 42, 109, 100]
    }
    // , {
    //   name: 'series2',
    //   data: [11, 32, 45, 32, 34, 52, 41]
    // }
  ],
  chart: {
    height: 350,
    type: 'area'
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'smooth'
  },
  xaxis: {
    type: 'month',
    // categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
    categories: ["Jan", "Feb", "March", "April", "May", "Jun"]
  },
  tooltip: {
    x: {
      format: 'dd/MM/yy HH:mm'
    },
  },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();


// monthly sale chart
var options2 = {
  series: [{
    name: 'PRODUCT A',
    data: [44, 55, 41, 67, 22, 43, 20, 50, 25, 40, 80, 36]
  }, {
    name: 'PRODUCT B',
    data: [13, 23, 20, 8, 13, 27, 20, 40, 25, 32, 45, 65]
  }, {
    name: 'PRODUCT C',
    data: [11, 17, 15, 15, 21, 14, 20, 50, 42, 15, 54, 76]
  }, {
    name: 'PRODUCT D',
    data: [21, 7, 25, 13, 22, 8, 12, 54, 36, 18, 28, 65]
  }],
  chart: {
    type: 'bar',
    height: 350,
    stacked: true,
    toolbar: {
      show: true
    },
    zoom: {
      enabled: true
    }
  },
  responsive: [{
    breakpoint: 480,
    options: {
      legend: {
        position: 'bottom',
        offsetX: -10,
        offsetY: 0
      }
    }
  }],
  plotOptions: {
    bar: {
      horizontal: false,
      borderRadius: 10,
      dataLabels: {
        total: {
          enabled: true,
          style: {
            fontSize: '13px',
            fontWeight: 900
          }
        }
      }
    },
  },
  xaxis: {
    type: 'datetime',
    categories: ['01/01/2023 GMT', '01/02/2023 GMT', '01/03/2023 GMT', '01/04/2023 GMT',
      '01/05/2023 GMT', '01/06/2023 GMT', '01/07/2023 GMT', '01/08/2023 GMT', '01/09/2023 GMT', '01/10/2023 GMT', '01/11/2023 GMT', '01/12/2023 GMT'
    ],
  },
  legend: {
    position: 'right',
    offsetY: 40
  },
  fill: {
    opacity: 1
  }
};

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();


// visitors chart
var options3 = {
  series: [44, 55, 13, 33],
  chart: {
    width: 380,
    type: 'donut',
  },
  dataLabels: {
    enabled: true
  },
  labels: ['Reguler', 'Occasional', 'Passersby', 'Superfans'],
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        show: false
      }
    }
  }],
  legend: {
    position: 'left',
    offsetY: 0,
    height: 230,
  }
};

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();


// Earning chart
var options4 = {
  series: [{
      name: "High - 2013",
      data: [28, 29, 33, 36, 32, 32, 33]
    },
    {
      name: "Low - 2013",
      data: [12, 11, 14, 18, 17, 13, 13]
    }
  ],
  chart: {
    height: 330,
    type: 'line',
    dropShadow: {
      enabled: true,
      color: '#000',
      top: 18,
      left: 7,
      blur: 10,
      opacity: 0.2
    },
    toolbar: {
      show: false
    }
  },
  colors: ['#77B6EA', '#545454'],
  dataLabels: {
    enabled: true,
  },
  stroke: {
    curve: 'smooth'
  },
  // title: {
  // text: 'Average High & Low Temperature',
  // align: 'left'
  // },
  grid: {
    borderColor: '#e7e7e7',
    row: {
      colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
      opacity: 0.5
    },
  },
  markers: {
    size: 1
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
    // title: {
    //   text: 'Month'
    // }
  },
  yaxis: {
    // title: {
    //   text: 'Temperature'
    // },
    min: 5,
    max: 40
  },
  legend: {
    position: 'top',
    horizontalAlign: 'right',
    floating: true,
    offsetY: -25,
    offsetX: -5
  }
};

var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
chart4.render();