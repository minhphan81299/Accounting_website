const hcm=document.getElementById('location-hcm');
const hn=document.getElementById('location-hn');
const hcmContent=document.getElementById('location-hcm-content');
const hnContent=document.getElementById('location-hn-content');
hcm.addEventListener('click',()=>{
    hcmContent.style.display="block";
    hnContent.style.display="none"
})
hn.addEventListener('click',()=>{
    hcmContent.style.display="none";
    hnContent.style.display="block"
})