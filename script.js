let fetcherservices=['bigimg','signup','login','fetcherservice1','fetcherservice2','fetcherservice3','fetcherservice4','fetcherservice5','fetcherservice6','fetcherservice7','fetcherservice8']
let dom=['Title','navbar','content','packages','lochead','locations','domainhead','domain','aboutus','copyright']
function onService(index){
    for (let i = 0; i < 11; i++) {
        if(i==index){
            const element = fetcherservices[i];
            let servId=document.getElementById(element);
            servId.style.display="block";
        }
        else{
            const element = fetcherservices[i];
            let servId=document.getElementById(element);
            servId.style.display="none";
        }
    }
}
function onPackage(index){
    for (let i = 2; i < 8; i++) {
        if(i!=index){
            const element = dom[i];
            const element2='packageInfo';
            let servId=document.getElementById(element);
            let servId2=document.getElementById(element2);
            servId.style.display="none";
            servId2.style.display="block";
        }
    }
}
function onLocation(index){
    for (let i = 2; i < 8; i++) {
        if(i!=index){
            const element = dom[i];
            const element2='locationInfo';
            let servId=document.getElementById(element);
            let servId2=document.getElementById(element2);
            servId.style.display="none";
            servId2.style.display="block";
        }      
    }
}
function onTrain(){
    onLocation(1);
    const element2='locationInfo';
    let servId2=document.getElementById(element2);
    servId2.style.display="none";
    let train=document.getElementById('TrainInfo');
    train.style.display="block";
    let flight=document.getElementById('FlightInfo');
    flight.style.display="none";
}
function onFlight(){
    onLocation(1);
    const element2='locationInfo';
    let servId2=document.getElementById(element2);
    servId2.style.display="none";
    let train=document.getElementById('TrainInfo');
    train.style.display="none";
    let flight=document.getElementById('FlightInfo');
    flight.style.display="block";
}
function onBookings(){
    let content=document.getElementById('content');
    let booking=document.getElementById('Bookings');
    let offer=document.getElementById('mybookings');
    let contact=document.getElementById('Contacts');
    content.style.display="none";
    offer.style.display="none";
    contact.style.display="none";
    booking.style.display="block";
}
function onmybookings(){
    let content=document.getElementById('content');
    let booking=document.getElementById('Bookings');
    let offer=document.getElementById('mybookings');
    let contact=document.getElementById('Contacts');
    content.style.display="none";
    booking.style.display="none";
    contact.style.display="none";
    offer.style.display="block";
}
function onContacts(){
    let content=document.getElementById('content');
    let booking=document.getElementById('Bookings');
    let offer=document.getElementById('mybookings');
    let contact=document.getElementById('Contacts');
    content.style.display="none";
    offer.style.display="none";
    booking.style.display="none";
    contact.style.display="block";
}
let imgs=['./images/packages.png','./images/packages2.jpg','./images/packages3.jpg','./images/packages4.jpg','./images/packages5.jpg']
let image=document.getElementById('packages')
setInterval(() => {
    let random=Math.floor(Math.random()*4)
    image.style.backgroundImage='url("'+imgs[random]+'")';
}, 3000);
let locations=['./images/location1.png','./images/location2.jpg','./images/location3.jpg','./images/location4.jpg','./images/packages5.jpg']
let loc=document.getElementById('locimg')
setInterval(() => {
    let random=Math.floor(Math.random()*4)
    loc.src=locations[random];
}, 6000);
