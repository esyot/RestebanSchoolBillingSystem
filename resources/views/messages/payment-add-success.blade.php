<div id="payment-add-success" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg max-w-md w-full p-4">

        
            <div class="mt-4 text-center m-2">
                <h2 class="text-lg">Payment has been added successfully!</h2>
            </div>

            <div class="flex justify-end">

                <button hx-get="/account/pay/{{$account->id}}/{{$account->remarks}}" hx-trigger="click"
                 hx-target="#payment-add-success" hx-swap="outerHTML"
                class="px-4 py-2 bg-blue-500 hover:bg-blue-500 text-white rounded">OK</button>
            </div>
           
        
    </div>
</div>


</script>