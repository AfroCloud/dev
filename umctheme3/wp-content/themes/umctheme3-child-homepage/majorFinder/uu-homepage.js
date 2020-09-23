jQuery(document).ready(function ($) {

    // document.getElementById("myList").innerHTML = "Paragraph changed!";
    /*
    Get the value from the input then
    If we have value then make the api request
    Process the response
    */





    /*
    * Form Auto Complete Stuff
    */
                    // function mapAutoComplete(item) {
                    //     //creates an array of arrays of auto complete
                    //     return [item.title].concat(item.tags).concat(item.interests);
                    // }

                    // function setUpAutoSuggest(response){
                    //     mapAutoComplete(response);
                    //     var suggestions = response.map(mapAutoComplete).reduce(function(accumulator, items){
                    //         return accumulator.concat(items);
                    //     }, []);
                    //     let uniqueSuggetsions = suggestions.filter((item, i, ar) => ar.indexOf(item) === i);
                    //     $( "#uu-program-search-input" ).autocomplete({
                    //         source: uniqueSuggetsions
                    //     });
                    //     //console.log(suggestions);
                    // }

                    // function loadAllPrograms() {
                    //     $.ajax({
                    //         url: 'allprograms.json',
                    //         type: 'GET',
                    //     })
                    //     .done(function (response) {
                    //         setUpAutoSuggest(response);
                    //     })
                    //     .fail(function (err) {
                    //         console.error(err)
                    //     })
                    // }

                    // loadAllPrograms();




    /*
    * Render Items Stuff
    */
    function renderItems(arr) {
        //console.log(arr);
        var $listEl = $('#uuReturnedResultsList');
        $listEl.empty();

        arr.forEach(function (item) {
            console.log(item.image);
        });

        arr.forEach((course) => $('<li />', {
            'data-prog-title': course.title,
            'data-marketing-description': course.description,
            'data-rt-tags': course.tags,
            'data-degrees': course.degrees,
            'data-interests': course.interests,
            'data-marketing-image': course.image,
            'data-advising-url': course.href,
            'class': 'program-result program-item'
        }).text(course.title)
            .appendTo($listEl)
    );

        $('#uuReturnedResultsList > .program-result').on('click touch', function (e) {
            e.preventDefault();

            var $listEl = $('#uuReturnedResultsList');
            $listEl.empty();
            var clickedProgramTitle = $(this).data("prog-title"),
                clickedMarketingDesc = $(this).data("marketing-description"),
                clickedRtTags = $(this).data("rt-tags"),
                clickedDegrees = $(this).data("degrees"),
                clickedInterests = $(this).data("interests"),
                clickedMarketingImage = $(this).data("marketing-image"),
                clickedAdvisingUrl = $(this).data("advising-url");

                clickedContent = '<div  class="uu-card">';

                //img
                if(clickedMarketingImage.length != 0){clickedContent += '<div class="uu-card-img" style="background-image:url(' + clickedMarketingImage + ')"><h1>' + clickedProgramTitle + '</h1></div>';}




                //other content
                clickedContent += '<div class="uu-card-details">';
                clickedContent += '<div class="uu-card-body">';
                if(clickedMarketingDesc.length != 0){clickedContent += '<p><strong>Overview:</strong> ' + clickedMarketingDesc + '</p>';}
                if(clickedRtTags.length != 0){clickedContent += '<p><strong>Tags:</strong> ' + clickedRtTags + '</p>';}
                if(clickedDegrees.length != 0){clickedContent += '<p><strong>Degrees:</strong> ' + clickedDegrees + '</p>';}
                if(clickedInterests.length != 0){clickedContent += '<p><strong>Interests:</strong> ' + clickedInterests + '</p>';}
                if(clickedAdvisingUrl.length != 0){clickedContent += '<a class="btn major-finder-btn" href="' + clickedAdvisingUrl + '" target="_blank">Learn More</a>';}

                clickedContent += '</div>' // end uu-card-details
                clickedContent += '</div>' // end uu-card-body
                clickedContent += '</div>'; //end wrapper

                $listEl.append(clickedContent)
        })
    }


    /*
    * Ajax call to get results based on user input
    */
    function initSearch(myQuery) {
        $.ajax({
            url: uuLocalizedVars.uuAjaxUrl + '/majorFinder/sendWithPhp.php',
            type: 'GET',
            data: {
                course: myQuery
                // secret: 'nuke'
            }
        })
            .done(function (response) {
                var myresponse = JSON.parse(response);
                //console.log(myresponse);
                try {
                    var myresponse = JSON.parse(response);
                    if(myresponse.msg) {
                        $('#uuReturnedResultsList').html(myresponse.msg)
                    }
                    else {
                        renderItems(myresponse);
                    }
                }
                catch(e) {
                    $('#uuReturnedResultsList').html(response)
                }
            })
            .fail(function (err) {
                console.error(err)
            })
    }



    /*
    * Form validation Stuff
    */
    // $('#uu-program-search-button').on('click touch', function (e) {
    //     $("#uu-program-search-interest-dropdown option:selected").removeAttr("selected");
    //     e.preventDefault();
    //     e.stopImmediatePropagation();

    //     var input = $('#uu-program-search-input');
    //     var inputQuery = input.val();
    //     //console.log(inputQuery)
    //     initSearch(inputQuery)
    // });



    // $('#uu-program-search-input').on('focusin', function (e) {
    //     $("#uu-program-search-interest-dropdown option:selected").removeAttr("selected");
    // });



    $("#uuProgramInterestDropdown").change(function(e) {
        //console.log('this happened');
        e.preventDefault();
        $('#uu-program-search-input').val('');
        var inputQuery = $('option:selected', this).text();
        initSearch(inputQuery);
        //alert( $('option:selected', this).text() );
    });


});
