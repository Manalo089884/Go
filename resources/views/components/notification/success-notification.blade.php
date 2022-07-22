 <div id="success-notification-content" class="toastify-content hidden flex non-sticky-notification-content"> 
    <i class="text-success w-10 h-10 mx-auto" data-lucide="check-circle"></i> 
    <div class="ml-4 mr-4"> 
        <div class="font-medium">{{$title}}</div> 
        <div class="text-slate-500 mt-1">{{$message}}</div> 
     </div> 
</div> 
<script>
Toastify({ 
    node: $("#success-notification-content") .clone() .removeClass("hidden")[0], 
    duration: 7000, 
    newWindow: true, 
    close: true, 
    gravity: "top", 
    position: "right", 
    stopOnFocus: true, }).showToast();
</script>