//ตัวแปรเก็บรูป
const redImgList = [ "รูป/pen_red.png","รูป/pen_red2.png","รูป/pen_red3.png","รูป/pen_red4.png"]
const blueImgList = [ "รูป/pen_bule.png","รูป/pen_blue2.png","รูป/pen_bule3.png","รูป/pen_bule4.png"]
const greenImgList = [ "รูป/pen_Green.png","รูป//pen_Green2.png","รูป//pen_Green3.png","รูป//pen_Green4.png"]
const blackImgList = [ "รูป/pen_black.png","รูป/pen_black2.png","รูป/pen_black3.png","รูป/pen_black4.png"]

//คำอธิบาย
const showpen = document.getElementById("img_pro")

const penred = document.getElementById("img_pro")

const gelInkPen = "ไส้ภายในจะบรรจุหมึกคล้ายหมึกปากกาลูกลื่นผสมตัวทำละลายด้วยน้ำมันให้มีความเหนียวข้นน้อยลงจนคล้ายเจล"

const PigmentInk ="เป็นปากกาที่ถูกพัฒนาต่อจากปากกาคอแร้ง ใช้งานง่ายและสะดวกมากยิ่งขึ้น แต่ยังคงมีหัวปากกาที่เป็นปลายแหลมและยังใช้น้ำหมึกอยู่แต่ไม่ต้องจุ่มหมึกก่อนเขียนแบบปากกาคอแร้ง"

const FountainPen ="คือหมึกที่สามารถทนต่อน้ำได้เมื่อถูกน้ำหรือนำไปแช่น้ำหมึกที่เกาะอยู่บนกระดาษจะคงเดิมไม่เลอะหรือซึมออกจากกระดาษ"

const showDesc = document.getElementById("la_b") 


//ฟังชันปุ่ม สีต่างๆ
const redStyleBtn = document.getElementById("red_")
redStyleBtn.addEventListener("click",()=>{
  setMiniImg(redImgList)

});
 
document.getElementById("black_").addEventListener("click",()=>{

  setMiniImg(blackImgList)

});

document.getElementById("green_").addEventListener("click",()=>{

  setMiniImg(greenImgList)

});

document.getElementById("blue_").addEventListener("click",()=>{

  setMiniImg(blueImgList)

});



// ตั้งค่ารูปเล็ก
const setMiniImg = (array)=>{
  for (let i = 1 ; i <= 4; i++){
    let imgs = document.getElementsByClassName("img_mim_"+i)
    for(let element of  imgs){
      element.src = array[i-1]
      showpen.src = array[0]
    }
    
  }
  
}

// ฟังชั้นการแสดงรูปให้ใหญ่
const setEventClick = ()=>{
  const miniImgBtm = document.getElementsByClassName("img_mim")
  for(let i = 0 ; i<8 ; i++){
    miniImgBtm[i].addEventListener("click",()=>{
      showpen.src = miniImgBtm[i].children[0].src
    })
  }
}

setEventClick()


/* การเขียน เรียกใช่ฟังก์ชันไปเลย หรือว่าสร้างฟังก์ชันได้เลย
 document.getElementById("btn_Custom_1").addEventListener("click",test);*/

 const inkStyleBtn  = document.getElementById("btn_Custom_1")
 inkStyleBtn.addEventListener("click",()=>{
  showDesc.innerHTML= gelInkPen

});


document.getElementById("btn_Custom_2").addEventListener("click",()=>{
  showDesc.innerHTML =PigmentInk


});


document.getElementById("btn_Custom_3").addEventListener("click",()=>{
 showDesc.innerHTML = FountainPen


});


const  alertBuy = document.getElementById("Buynow")
alertBuy.addEventListener("click",()=>{

alert("Fake Buying เว็บไซต์นี้กำลังอยู่ในระบบเทสระบบยังไม่สามารถซื้อของได้จริงๆ ยังอยู่ในขั้นตอนการพัฒนา")

});





//เรียกใช่งานเพื่อเป็นค่าเริ่มต้น
redStyleBtn.click()
inkStyleBtn.click()