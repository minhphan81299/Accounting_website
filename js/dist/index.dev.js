"use strict";

var service = document.getElementById("services");
var Dropdown = document.getElementById("drop-down");
var dropItem1 = document.getElementById("drop-right-item1");
var dropItem2 = document.getElementById("drop-right-item2");
var dropItem3 = document.getElementById("drop-right-item3");
var dropLeftHeader = document.getElementById("drop-left-header");
var dropLeftItem1 = document.getElementById("drop-left-item1");
var dropLeftItem2 = document.getElementById("drop-left-item2");
var dropLeftItem3 = document.getElementById("drop-left-item3");
var ToggleMenuMobile = document.getElementById("menu-open");
var menuMobile = document.getElementById("menu-mobile-list");
var serviceList = document.getElementById("service-item-mobile");
var serviceItem = document.getElementById("service-mobile");
ToggleMenuMobile.addEventListener('click', function () {
  var style = window.getComputedStyle(menuMobile);

  if (style.getPropertyValue('display') == 'none') {
    menuMobile.style.display = "block";
  } else {
    menuMobile.style.display = "none";
  }
});
serviceList.addEventListener('click', function () {
  var styleService = window.getComputedStyle(serviceItem);

  if (styleService.maxHeight == '0px') {
    serviceItem.style.maxHeight = '200px';
    console.log('chay 1');
  } else {
    serviceItem.style.maxHeight = '0px';
    console.log('chay 2');
  }
});
service.addEventListener('mouseover', function () {
  Dropdown.style.maxHeight = "500px";
  console.log(Dropdown);
});
Dropdown.addEventListener('mouseover', function () {
  Dropdown.style.maxHeight = "500px";
});
Dropdown.addEventListener('mouseout', function () {
  Dropdown.style.maxHeight = "0px";
});
dropItem1.addEventListener('mouseover', function () {
  dropLeftItem1.classList.add('active');
  dropLeftItem2.classList.remove('active');
  dropLeftItem3.classList.remove('active');
  console.log(1);
});
dropItem2.addEventListener('mouseover', function () {
  dropLeftItem2.classList.add('active');
  dropLeftItem1.classList.remove('active');
  dropLeftItem3.classList.remove('active');
  console.log(2);
});
dropItem3.addEventListener('mouseover', function () {
  dropLeftItem3.classList.add('active');
  dropLeftItem1.classList.remove('active');
  dropLeftItem2.classList.remove('active');
  console.log(3);
});

window.onscroll = function (e) {
  if (document.documentElement.scrollTop > 0) {
    console.log('chay tren');
    document.getElementById("navbar").style.height = "95px";
    document.getElementById("navbar__header").style.height = "94px";
    document.getElementById("navbar__header").style.paddingTop = "18px";
    document.getElementById("navbar__footer").style.transform = "translate(97px, -90px)";
    document.getElementById("logo-text").style.transform = "translateX(-130px)";
    document.getElementById("logo-text").style.opacity = "0";
    document.getElementById("navbar__footer").style.boxShadow = 'none';
    document.getElementById('navbar__header').style.boxShadow = '0 2px 2px 0 rgba(0,0,0,.25)';
    document.getElementById('appear').style.transform = 'translateX(96px)';
    document.getElementById('disappear1').style.transform = 'translateX(62px)';
    document.getElementById('disappear2').style.transform = 'translateX(31px)';
    document.getElementById('disappear1').style.opacity = '0';
    document.getElementById('disappear2').style.opacity = '0';
    document.getElementById('disappear').style.opacity = '0';
  } else {
    document.body.scrollTop = 0;
    console.log('chay duoi');
    document.getElementById("navbar").style.height = "200px";
    document.getElementById("navbar__footer").style.transform = "translate(0px, 0px)";
    document.getElementById("logo-text").style.transform = "translateX(0px)";
    document.getElementById("navbar__header").style.height = "128px";
    document.getElementById("navbar__header").style.paddingTop = "40px";
    document.getElementById("navbar__footer").style.boxShadow = ' inset 0 1px 0 0 #f5f3f2';
    document.getElementById('navbar__header').style.boxShadow = 'none';
    document.getElementById('appear').style.transform = 'translateX(0px)';
    document.getElementById('disappear1').style.transform = 'translateX(0px)';
    document.getElementById('disappear2').style.transform = 'translateX(0px)';
    document.getElementById('disappear1').style.opacity = '100%';
    document.getElementById('disappear2').style.opacity = '100%';
    document.getElementById('disappear').style.opacity = '100%';
    document.getElementById("logo-text").style.opacity = "1";
  }
};