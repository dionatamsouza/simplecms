{include file="layout/admin/header.tpl"}

    <h1><p>Welcome to the admin area,{$smarty.session.username}</p></h1>
        <p>Here you can do administrative stuffs</p>

    
     <div id="box">
       <div class="box-top">{$title}</div>
        <div class="box-panel">
			{if isset($smarty.get.manage_admins)}
			    <h2>{$title}</h2>
		    <table>
		        <tr>
		         <th style="text-align: left; width: 200px;">Username</th>
		         <th colspan="2" style="text-align: left;">Actions</th>
		        </tr>
		        <!--cid is the id of item in array item is the row so $i.id returns user id-->
				{foreach key=cid item=i from=$admin_set}
				<tr>
			        <td>{$i.username}</td>
			        <td><a href="edit_admin.php?id={$i.id}">Edit</a></td>
			        <td><a href="delete_admin.php?id={$i.id}" onclick="return confirm('Are you sure?');">Delete</a></td>
		      	</tr>
				{foreachelse}
				    No items were found in the search
				{/foreach}

			</table>
			{/if}
	    </div>
    </div>

       

{include file="layout/admin/footer.tpl"}