/*
 Template Name: Lunoz - Admin & Dashboard Template
 Author: Myra Studio
 File: Dashboard
*/

$(function(){"use strict";$("#morris-bar-example").length&&Morris.Bar({element:"morris-bar-example",barColors:["#ebeef1","#20b799"],data:[{y:"2010",a:80,b:100},{y:"2011",a:110,b:130},{y:"2012",a:90,b:110},{y:"2013",a:80,b:100},{y:"2014",a:110,b:130},{y:"2015",a:90,b:110},{y:"2016",a:120,b:140},{y:"2017",a:110,b:125},{y:"2018",a:170,b:190},{y:"2019",a:120,b:140}],xkey:"y",ykeys:["a","b"],hideHover:"auto",gridLineColor:"#eef0f2",resize:!0,barSizeRatio:.4,labels:["iPhone 8","Samsung Gallexy"]}),$("#morris-donut-example").length&&Morris.Donut({element:"morris-donut-example",resize:!0,backgroundColor:"transparent",colors:["#20b799","#346ee0","#e9ecef"],
    data:[{label:"Januari",value:2587},{label:"Februari",value:1587},{label:"Maret",value:1587},{label:"April",value:1587},{label:"Mei",value:1587},{label:"Juni",value:1587}]}),$("#morris-line-example").length&&Morris.Line({element:"morris-line-example",gridLineColor:"#eef0f2",lineColors:["#f15050","#e9ecef"],data:[{y:"2013",a:80,b:100},{y:"2014",a:110,b:130},{y:"2015",a:90,b:110},{y:"2016",a:120,b:140},{y:"2017",a:110,b:125},{y:"2018",a:170,b:190},{y:"2019",a:120,b:140}],xkey:"y",ykeys:["a","b"],hideHover:"auto",resize:!0,labels:["Series A","Series B"]})});