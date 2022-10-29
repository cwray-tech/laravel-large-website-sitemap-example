## Create a sitemap for a large website
If you ever wanted to build a sitemap for a large website, you may have wondered how to do it. 

## About this project

This is a simple Laravel 8 project that shows how you can create a custom sitemap in Laravel for a web application that contains thousands of records. 

You can [read the full tutorial on my website here.](https://chriswray.dev/posts/how-to-create-a-sitemap-in-laravel-for-a-website-that-contains-thousands-of-records)

You can also view [this sample application deployed here.](https://sitemap-project.chriswray.dev)

Are you looking for someone to join your team? I would be happy to chat with you about it. [Find my contact info here.](https://chriswray.dev/contact)

## Note: NOT a good way of solving this problem, entirely.

As [this kind person responded in Laracasts](https://laracasts.com/discuss/channels/laravel/how-to-create-sitemap-for-30000-records?page=1&replyId=839970), it is better to chunk the results and show results in a set number of records. For example, you could have thousands of records that begin with the letter "b", and in that case, your sitemap.xml for that letter would still load insanely slow.

In order to prevent that issue from taking place, you will want to ensure that records are chunked so that the app only loads a few hundred or so records at once.

You can [learn more about chunking results on the Laravel Docs website](https://laravel.com/docs/9.x/queries#chunking-results).
