<script language='javascript'>
function onlyNumber() 
{
    if(((event.keyCode >= 48) && (event.keyCode <= 57))) {
       event.returnValue = true;
    } else {
       event.returnValue = false;
    }
} 

function focusMove(obj,max,toObj) {
   value = obj.value;
 if (value.length >= max) {
   toObj.focus();
   return;
 }
}

//-->
</SCRIPT>


<form name="f" method='post'>

<input name="hp1" type="text" class="formbox"  style="height:20px;ime-mode:disabled;" size="4" onfocus="this.style.backgroundColor='#dddddd'" onblur="this.style.backgroundColor=''" onkeypress="onlyNumber()" maxlength="3"  onkeyup="focusMove(this,3,document.f.hp2)" />
          -
          <input name="hp2" type="text" class="formbox"  style="height:20px;ime-mode:disabled;" size="4" onfocus="this.style.backgroundColor='#dddddd'" onblur="this.style.backgroundColor=''" onkeypress="onlyNumber()" maxlength="4"   onkeyup="focusMove(this,4,document.f.hp3)"  />
          -
          <input name="hp3" type="text" class="formbox"  style="height:20px;ime-mode:disabled;" size="4" onfocus="this.style.backgroundColor='#dddddd'" onblur="this.style.backgroundColor=''" onkeypress="onlyNumber()" maxlength="4" onkeyup="focusMove(this,4,document.f.email)" />

</form>