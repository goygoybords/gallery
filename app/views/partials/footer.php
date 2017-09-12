	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="/public/js/jquery.jscroll.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
		    $(window).scroll(function(){
		        var lastID = $('#last-id').val();
		        $('.test').hide();
		        if ($(window).scrollTop() == $(document).height() - $(window).height() && lastID != 0){
		            $.ajax({
		                type:'POST',
		                url:'more',
		                data:'id='+lastID,
		                beforeSend:function(html)
		                {
		                    $('.test').show();
		                },
		                success:function(html)
		                {
		                    $('.load-more').remove();
		                    $('.test').append(html);
		                }
		            });
		        }
		    });
		});
	</script>
</html> 

