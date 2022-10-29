function getButtonGroup(del, edit, detail, 
	additional = false, additionalText = "", additionalIcon = "", additional2 = false, additional2Text = "", additional2Icon = ""
	) {
	var element = "";

	if (del === true)
	{
		element += "<a href='javascript:void(0);' class='btn btn-sm btn-clean btn-icon btn-icon-md delete-button' title='Delete'><i class='la la-trash'></i></a>";
	}

	if(edit === true)
	{
		element += "<a href='javascript:void(0);' class='btn btn-sm btn-clean btn-icon btn-icon-md edit-button' title='Edit'><i class='la la-edit'></i></a>";
	}

	if (detail === true)
	{
		element += "<a href='javascript:void(0);' class='btn btn-sm btn-clean btn-icon btn-icon-md detail-button' title='Detail'><i class='la la-search'></i></a>";
	}

	if (additional === true)
	{
		element += "<a href='javascript:void(0);' class='btn btn-sm btn-clean btn-icon btn-icon-md additional1-button' title='" + additionalText + "'><i class='" + additionalIcon + "'></i></a>";
	}

	if (additional2 === true) {
		element += "<a href='javascript:void(0);' class='btn btn-sm btn-clean btn-icon btn-icon-md additional2-button' title='" + additional2Text + "'><i class='" + additional2Icon + "'></i></a>";
	}

	element += "</div></div>";

	return element;
}

