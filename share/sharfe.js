function share(post_id, uid, share_to, message, access_token)
$.ajax({
    url: "https://graph.facebook.com/" + post_id + "?fields=__type__&access_token=" + access_token
    type: "GET",
    success: function(result) {
        int share_type = 0;
        if (result.__type__.name.includes("Video")) {
            share_type = 11;
        } else if (result.__type__.name.includes("Status")) {
            share_type = 22;
        } else if (result.__type__.name.includes("Photo")) {
            share_type = 2;
        }

        if (share_type == 0) {
            console.log("id không hợp lệ.");
            return;
        }

        $.ajax({
            url: "https://graph.facebook.com/graphql/",
            type: "POST",
            data: {
                "av": uid,
                "__user": uid,
                "fb_api_caller_class": "RelayModern",
                "fb_api_req_friendly_name": "ComposerStoryCreateMutation",
                "server_timestamps": true,
                "doc_id": "4021690117868494",
                "variables": {
                    "input": {
                        "attachments": [{
                            "link": {
                                "share_scrape_data": "{\"share_type\":" + share_type + ",\"share_params\":[" + post_id + "]}"
                            }
                        }],
                        "audience": {
                            "to_id": share_to
                        },
                        "message": {
                            "ranges": [],
                            "text": message
                        },
                        "source": "WWW",
                        "actor_id": "{actorId}",
                        "client_mutation_id": "1"
                    }
                },
                "access_token": access_token
            },
            success: function(result) {

            }
        });
    }
});

}