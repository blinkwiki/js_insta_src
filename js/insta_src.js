function insta_src(src_val, tr_name) {

    var space_chr = '';

    // start the search result counter
    var res_count = 0;

    // get all the row elements to search
    var rows = document.getElementsByName(tr_name);

    // make sure the rows or elements are more than 0
    if (rows.length > 0)
    {

        // loop through all the rows and search
        for (i=0; i<rows.length; i++)
        {
            
            // define the search haystack: ie the current row's innerHTML property in lower case
            var haystack = space_chr + rows[i].innerHTML.toLowerCase();

            // define the needle: the input value also in lower case
            var needle = src_val.toLowerCase();
            
            if (
                
                // if the needle is found in the haystack
                (haystack.search(needle) > 0)
                
                // and the needle is not a space, we want alphanumeric characters in the search
                && (needle != space_chr)
                
            )
            {
                
                // set the style.display state as null: ie to show the element
                dstate = '';
                
                // increment the search result counter
                res_count++;
            }
            else
            {
                // set the style.display state as none: ie to hide the element
                dstate = 'none';

                // ensure that the needle is not null
                if (needle == '')
                {
                    // if so, reset the style.display state to null: show
                    dstate = '';
                }
            }

            // set the current row's style.display attribute
            rows[i].style.display = dstate;
            
            // set the result counter
            res_counter.innerHTML = '';
            if (res_count > 0)
            {
                res_counter.innerHTML = res_count + ' results';
            }
            
        }
    }
}