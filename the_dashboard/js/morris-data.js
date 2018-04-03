$(function() {
  $.ajax({
          url:'php/graphs.php',
          method:'post',
          success: function (data) {
            data = JSON.parse(data)
            console.log(data);

            $.each(data, function (i,val) {

              //
              // Morris.Area({
              //   element: 'morris-area-chart',
              //   data: [{
              //     period: val.id,
              //     Name: val.name,
              //     type: val.type,
              //   },{
              //     period: val.id,
              //     Name: val.name,
              //     type: val.type,
              //   },{
              //   period: val.id,
              //   Name: val.name,
              //   type: val.type,
              // },{
              //   period: val.id,
              //   Name: val.name,
              //   type: val.type,
              //
              //   }],
              //   xkey: 'period',
              //   ykeys: ['Name', 'type'],
              //   labels: ['Name', 'type'],
              //   pointSize: 2,
              //   hideHover: 'auto',
              //   resize: true
              // });

              // Morris.Donut({
              //   element: 'morris-donut-chart',
              //   data: [{
              //     label: "students",
              //     value: 12
              //   }, {
              //     label: "Courses",
              //     value: 30
              //   }, {
              //     label: "Notices",
              //     value: 20
              //   }],
              //   resize: true
              // });

              // Morris.Bar({
              //   element: 'morris-bar-chart',
              //   data: [{
              //     y: '2006',
              //     a: 100,
              //     b: 90
              //   }, {
              //     y: '2007',
              //     a: 75,
              //     b: 65
              //   }, {
              //     y: '2008',
              //     a: 50,
              //     b: 40
              //   }, {
              //     y: '2009',
              //     a: 75,
              //     b: 65
              //   }, {
              //     y: '2010',
              //     a: 50,
              //     b: 40
              //   }, {
              //     y: '2011',
              //     a: 75,
              //     b: 65
              //   }, {
              //     y: '2012',
              //     a: 100,
              //     b: 90
              //   }],
              //   xkey: 'y',
              //   ykeys: ['a', 'b'],
              //   labels: ['Series A', 'Series B'],
              //   hideHover: 'auto',
              //   resize: true
              // });
            })




          },
          error:function (data) {
            alert(data)
          }
        })


});
