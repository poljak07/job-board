<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats! Your job is now live on our website.
</p>

<p>
    <a hef="{{ url('/jobs/' . $job->id) }}"> View Your Job Listing</a>
</p>
