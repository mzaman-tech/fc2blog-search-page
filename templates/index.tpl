{include file="header.tpl" title="Info"}

<div class="container">
  <h2 class="text-center">Search Form</h2>
  <form action="index.php" method="POST">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="date" class="col-sm-3 control-label">Date</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="date" id="date" value="{if !empty($smarty.cookies.search_date)}{$smarty.cookies.search_date}{/if}" placeholder="yyyy-mm-dd">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">User Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="user_name" id="user_name" value="{if !empty($smarty.cookies.search_user_name)}{$smarty.cookies.search_user_name}{/if}" placeholder="user name">
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="server_number" class="col-sm-3 control-label">Server Number</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="server_number" id="server_number" value="{if !empty($smarty.cookies.search_server_number)}{$smarty.cookies.search_server_number}{/if}" placeholder="server number">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="entry_number" class="col-sm-3 control-label">Entry Number</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="entry_number" id="entry_number" value="{if !empty($smarty.cookies.search_entry_number)}{$smarty.cookies.search_entry_number}{/if}" placeholder="enrty number">
                </div>
            </div>
        </div>
    </div>
    <br />
    <button type="submit" class="btn btn-primary btn-block">Search</button>
  </form>
</div>


<div class="container">
  <h2 class="text-center">Search Result</h2>          
  <table class="table table-striped table-bordered table-responsive">
    <thead>
      <tr>
        <th>Date</th>
        <th>URL</th>
        <th>Title</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    {if $result->num_rows > 0}
    {while $row = $result->fetch_assoc()}
	<tr>
		<td>{$row['date']}</td>
		<td>{$row['url']}</td>
		<td>{$row['title']}</td>
		<td>{$row['description']}</td>
	</tr>
	{/while}	
	{else}
		<tr>
			<td colspan="4" class="text-center"> No data found! </td>
		</tr>
	{/if}
    </tbody>
  </table>

  

</div>

 <div class="container text-center">
 	<ul class="pagination pagination-md">
	    <li><a href="{if $page != 1}index.php?page={$page - 1}{/if}" class="{if $page == 1 || $page > $totalPage}link-disabled{/if}">Previous</a></li>
	    <li><a href="{if $page < $totalPage}index.php?page={$page + 1}{/if}" class="{if $page >= $totalPage}link-disabled{/if}">Next</a></li>
	  </ul>
 </div>

{include file="footer.tpl"}