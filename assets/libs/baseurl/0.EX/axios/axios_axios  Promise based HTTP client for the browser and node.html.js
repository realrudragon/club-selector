<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
  <link rel="dns-prefetch" href="https://github.githubassets.com/">
  <link rel="dns-prefetch" href="https://avatars0.githubusercontent.com/">
  <link rel="dns-prefetch" href="https://avatars1.githubusercontent.com/">
  <link rel="dns-prefetch" href="https://avatars2.githubusercontent.com/">
  <link rel="dns-prefetch" href="https://avatars3.githubusercontent.com/">
  <link rel="dns-prefetch" href="https://github-cloud.s3.amazonaws.com/">
  <link rel="dns-prefetch" href="https://user-images.githubusercontent.com/">



  <link crossorigin="anonymous" media="all" integrity="sha512-7uoDIEGQ8zTwUS9KjTP+/2I13FQPHvJ9EKoeUThfin5R1+27bcUC08VQzUo4CIjCdhvJM4zxuI+3HcSycAUTCg==" rel="stylesheet" href="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/frameworks-abba74d6e28a6842788159fec056bf26.css">
  
    <link crossorigin="anonymous" media="all" integrity="sha512-MW+ZMyZsppet8jpCeuRf6R6ep2YA21uRlAaPeUHmlRvWDbX08i+17kchJwAVY4kws762vLl2VtxFx3kOq0nvGg==" rel="stylesheet" href="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/github-7b38ea66ce7a8e79d6a0cad4c9d34684.css">
    
    
    
    

  <meta name="viewport" content="width=device-width">
  
  <title>axios/axios: Promise based HTTP client for the browser and node.js</title>
    <meta name="description" content="Promise based HTTP client for the browser and node.js - axios/axios">
    <link rel="search" type="application/opensearchdescription+xml" href="https://github.com/opensearch.xml" title="GitHub">
  <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
  <meta property="fb:app_id" content="1401488693436528">

    
    <meta property="og:image" content="https://avatars1.githubusercontent.com/u/32372333?s=400&amp;v=4"><meta property="og:site_name" content="GitHub"><meta property="og:type" content="object"><meta property="og:title" content="axios/axios"><meta property="og:url" content="https://github.com/axios/axios"><meta property="og:description" content="Promise based HTTP client for the browser and node.js - axios/axios">

  <link rel="assets" href="https://github.githubassets.com/">
  <link rel="web-socket" href="wss://live.github.com/_sockets/VjI6Mjk4NTQxMjA5OmVlYzM5ODhlMDFlNmRjMzQ1ZWVmOTA4M2NjNmFlNmM1YmNlNzI0YmEyN2E1MzZkOTJhZGM1N2IwN2E4ZDI3ODA=--202e2aae1f68844abd63f812581c9fa2b401f89f">
  <meta name="pjax-timeout" content="1000">
  <link rel="sudo-modal" href="https://github.com/sessions/sudo_modal">
  <meta name="request-id" content="CE34:4F49:529B68:772CBB:5CA0DA3C" data-pjax-transient="">


  

  <meta name="selected-link" value="repo_source" data-pjax-transient="">

      <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
    <meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
    <meta name="google-site-verification" content="GXs5KoUUkNCoaAZn7wPN-t01Pywp9M3sEjnt_3_ZWPc">

  <meta name="octolytics-host" content="collector.githubapp.com"><meta name="octolytics-app-id" content="github"><meta name="octolytics-event-url" content="https://collector.githubapp.com/github-external/browser_event"><meta name="octolytics-dimension-request_id" content="CE34:4F49:529B68:772CBB:5CA0DA3C"><meta name="octolytics-dimension-region_edge" content="ap-southeast-1"><meta name="octolytics-dimension-region_render" content="iad"><meta name="octolytics-actor-id" content="41472465"><meta name="octolytics-actor-login" content="somkhane"><meta name="octolytics-actor-hash" content="f61e96c2c885859a88633ab290f71e84d4afee3ddffcd55c373bbd2bda730988">
<meta name="analytics-location" content="/&lt;user-name&gt;/&lt;repo-name&gt;" data-pjax-transient="true">



    <meta name="google-analytics" content="UA-3769691-2">

  <meta class="js-ga-set" name="userId" content="2a41b68a333c149fa1aca9bf46019d93">

<meta class="js-ga-set" name="dimension1" content="Logged In">



  

      <meta name="hostname" content="github.com">
    <meta name="user-login" content="somkhane">

      <meta name="expected-hostname" content="github.com">
    <meta name="js-proxy-site-detection-payload" content="NTU1OTgwYTJjYTVhMzZlYTQzOTRmMDUzZWUzMGFhMTU1YTdiZjYzM2Y2YzUzOGRhM2EyYmNhMzU4OGY3M2EwMnx7InJlbW90ZV9hZGRyZXNzIjoiMTg0LjIyLjEwMC4xNjciLCJyZXF1ZXN0X2lkIjoiQ0UzNDo0RjQ5OjUyOUI2ODo3NzJDQkI6NUNBMERBM0MiLCJ0aW1lc3RhbXAiOjE1NTQwNDU1MDEsImhvc3QiOiJnaXRodWIuY29tIn0=">

    <meta name="enabled-features" content="UNIVERSE_BANNER,MARKETPLACE_SOCIAL_PROOF,MARKETPLACE_SOCIAL_PROOF_CUSTOMERS,MARKETPLACE_TRENDING_SOCIAL_PROOF,MARKETPLACE_UNVERIFIED_LISTINGS,MARKETPLACE_PLAN_RESTRICTION_EDITOR,NOTIFY_ON_BLOCK,RELATED_ISSUES">

  <meta name="html-safe-nonce" content="dfa4a5c639960aa3247a4a0d82a6a4d0e8fa4bd0">

  <meta http-equiv="x-pjax-version" content="0fe86af0669e69ffd4e01406c614081e">
  

      <link href="https://github.com/axios/axios/commits/master.atom" rel="alternate" title="Recent Commits to axios:master" type="application/atom+xml">

  <meta name="go-import" content="github.com/axios/axios git https://github.com/axios/axios.git">

  <meta name="octolytics-dimension-user_id" content="32372333"><meta name="octolytics-dimension-user_login" content="axios"><meta name="octolytics-dimension-repository_id" content="23088740"><meta name="octolytics-dimension-repository_nwo" content="axios/axios"><meta name="octolytics-dimension-repository_public" content="true"><meta name="octolytics-dimension-repository_is_fork" content="false"><meta name="octolytics-dimension-repository_network_root_id" content="23088740"><meta name="octolytics-dimension-repository_network_root_nwo" content="axios/axios"><meta name="octolytics-dimension-repository_explore_github_marketplace_ci_cta_shown" content="false">


    <link rel="canonical" href="https://github.com/axios/axios" data-pjax-transient="">


  <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">

  <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">

  <link rel="mask-icon" href="https://github.githubassets.com/pinned-octocat.svg" color="#000000">
  <link rel="icon" type="image/x-icon" class="js-site-favicon" href="https://github.githubassets.com/favicon.ico">

<meta name="theme-color" content="#1e2327">




  <link rel="manifest" href="https://github.com/manifest.json" crossorigin="use-credentials">

  </head>

  <body class="logged-in env-production">
    

  <div class="position-relative js-header-wrapper ">
    <a href="#start-of-content" tabindex="1" class="p-3 bg-blue text-white show-on-focus js-skip-to-content">Skip to content</a>
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress"></div></div>

    
    
    


        
<header class="Header-old  f5" role="banner">
  <div class="d-flex flex-justify-between px-3 ">
    <div class="d-flex flex-justify-between ">
      <div class="">
        <a class="header-logo-invertocat" href="https://github.com/" data-hotkey="g d" aria-label="&quot;Home" page&quot;="" data-ga-click="Header, go to dashboard, icon:logo">
  <svg height="32" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
</a>

      </div>

    </div>

    <div class="HeaderMenu d-flex flex-justify-between flex-auto">
      <nav class="d-flex flex-items-center" aria-label="Global">
            <div class="">
              <div class="header-search mr-3 scoped-search site-scoped-search js-site-search position-relative js-jump-to" role="combobox" aria-owns="jump-to-results" aria-label="Search or jump to" aria-haspopup="listbox" aria-expanded="false">
  <div class="position-relative">
    <!-- '"` --><!-- </textarea></xmp> --><form class="js-site-search-form" role="search" aria-label="Site" data-scope-type="Repository" data-scope-id="23088740" data-scoped-search-url="/axios/axios/search" data-unscoped-search-url="/search" action="/axios/axios/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
      <label class="form-control input-sm header-search-wrapper p-0 header-search-wrapper-jump-to position-relative d-flex flex-justify-between flex-items-center js-chromeless-input-container">
        <input type="text" class="form-control input-sm header-search-input jump-to-field js-jump-to-field js-site-search-focus js-site-search-field is-clearable" data-hotkey="s,/" name="q" placeholder="Search or jump to…" data-unscoped-placeholder="Search or jump to…" data-scoped-placeholder="Search or jump to…" autocapitalize="off" aria-autocomplete="list" aria-controls="jump-to-results" aria-label="Search or jump to…" data-jump-to-suggestions-path="/_graphql/GetSuggestedNavigationDestinations#csrf-token=WDjjdvTTr7wAPwaZbms678RiueOzQAJ6qBR31HFFNTH3k4pQssBRebV27gKvSLV1WiinTdTVSIGJ56MP5NFhjA==" spellcheck="false" autocomplete="off">
          <input type="hidden" class="js-site-search-type-field" name="type">
            <img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/search-key-slash.svg" alt="" class="mr-2 header-search-key-slash">

            <div class="Box position-absolute overflow-hidden d-none jump-to-suggestions js-jump-to-suggestions-container">
              
<ul class="d-none js-jump-to-suggestions-template-container">
  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-suggestion" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 12 16" version="1.1" role="img"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 15 16" version="1.1" role="img"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M15.7 13.3l-3.81-3.83A5.93 5.93 0 0 0 13 6c0-3.31-2.69-6-6-6S1 2.69 1 6s2.69 6 6 6c1.3 0 2.48-.41 3.47-1.11l3.83 3.81c.19.2.45.3.7.3.25 0 .52-.09.7-.3a.996.996 0 0 0 0-1.41v.01zM7 10.7c-2.59 0-4.7-2.11-4.7-4.7 0-2.59 2.11-4.7 4.7-4.7 2.59 0 4.7 2.11 4.7 4.7 0 2.59-2.11 4.7-4.7 4.7z"></path></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in this repository">
        In this repository
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>
  </a>
</li>

</ul>

<ul class="d-none js-jump-to-no-results-template-container">
  <li class="d-flex flex-justify-center flex-items-center f5 d-none js-jump-to-suggestion p-2">
    <span class="text-gray">No suggested jump to results</span>
  </li>
</ul>

<ul id="jump-to-results" role="listbox" class="p-0 m-0 js-navigation-container jump-to-suggestions-results-container js-jump-to-suggestions-results-container">
  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-scoped-search d-none" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 12 16" version="1.1" role="img"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 15 16" version="1.1" role="img"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M15.7 13.3l-3.81-3.83A5.93 5.93 0 0 0 13 6c0-3.31-2.69-6-6-6S1 2.69 1 6s2.69 6 6 6c1.3 0 2.48-.41 3.47-1.11l3.83 3.81c.19.2.45.3.7.3.25 0 .52-.09.7-.3a.996.996 0 0 0 0-1.41v.01zM7 10.7c-2.59 0-4.7-2.11-4.7-4.7 0-2.59 2.11-4.7 4.7-4.7 2.59 0 4.7 2.11 4.7 4.7 0 2.59-2.11 4.7-4.7 4.7z"></path></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in this repository">
        In this repository
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>
  </a>
</li>

  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-global-search d-none" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 12 16" version="1.1" role="img"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 15 16" version="1.1" role="img"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M15.7 13.3l-3.81-3.83A5.93 5.93 0 0 0 13 6c0-3.31-2.69-6-6-6S1 2.69 1 6s2.69 6 6 6c1.3 0 2.48-.41 3.47-1.11l3.83 3.81c.19.2.45.3.7.3.25 0 .52-.09.7-.3a.996.996 0 0 0 0-1.41v.01zM7 10.7c-2.59 0-4.7-2.11-4.7-4.7 0-2.59 2.11-4.7 4.7-4.7 2.59 0 4.7 2.11 4.7 4.7 0 2.59-2.11 4.7-4.7 4.7z"></path></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in this repository">
        In this repository
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>
  </a>
</li>


    <li class="d-flex flex-justify-center flex-items-center p-0 f5 js-jump-to-suggestion">
      <img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-128.gif" alt="Octocat Spinner Icon" class="m-2" width="28">
    </li>
</ul>

            </div>
      </label>
</form>  </div>
</div>

            </div>

          <ul class="d-flex pl-2 flex-items-center text-bold list-style-none">
            <li>
              <a class="js-selected-navigation-item HeaderNavlink px-2" data-hotkey="g p" data-ga-click="Header, click, Nav menu - item:pulls context:user" aria-label="Pull requests you created" data-selected-links="/pulls /pulls/assigned /pulls/mentioned /pulls" href="https://github.com/pulls">
                Pull requests
</a>            </li>
            <li>
              <a class="js-selected-navigation-item HeaderNavlink px-2" data-hotkey="g i" data-ga-click="Header, click, Nav menu - item:issues context:user" aria-label="Issues you created" data-selected-links="/issues /issues/assigned /issues/mentioned /issues" href="https://github.com/issues">
                Issues
</a>            </li>
              <li class="position-relative">
                <a class="js-selected-navigation-item HeaderNavlink px-2" data-ga-click="Header, click, Nav menu - item:marketplace context:user" data-octo-click="marketplace_click" data-octo-dimensions="location:nav_bar" data-selected-links=" /marketplace" href="https://github.com/marketplace">
                   Marketplace
</a>                  
              </li>
            <li>
              <a class="js-selected-navigation-item HeaderNavlink px-2" data-ga-click="Header, click, Nav menu - item:explore" data-selected-links="/explore /trending /trending/developers /integrations /integrations/feature/code /integrations/feature/collaborate /integrations/feature/ship showcases showcases_search showcases_landing /explore" href="https://github.com/explore">
                Explore
</a>            </li>
          </ul>
      </nav>

      <div class="d-flex">
        
<ul class="user-nav d-flex flex-items-center list-style-none" id="user-links">
  <li class="dropdown">
    <span class="d-inline-block  px-2">
      
    <a aria-label="You have no unread notifications" class="Header-link notification-indicator tooltipped tooltipped-s  js-socket-channel js-notification-indicator" data-hotkey="g n" data-ga-click="Header, go to notifications, icon:read" data-channel="notification-changed:41472465" href="https://github.com/notifications">
        <span class="mail-status "></span>
        <svg class="octicon octicon-bell" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M14 12v1H0v-1l.73-.58c.77-.77.81-2.55 1.19-4.42C2.69 3.23 6 2 6 2c0-.55.45-1 1-1s1 .45 1 1c0 0 3.39 1.23 4.16 5 .38 1.88.42 3.66 1.19 4.42l.66.58H14zm-7 4c1.11 0 2-.89 2-2H5c0 1.11.89 2 2 2z"></path></svg>
</a>
    </span>
  </li>

  <li class="dropdown px-2 ">
    <details class="details-overlay details-reset">
  <summary class="Header-link" aria-label="Create new…" data-ga-click="Header, create new, icon:add" aria-haspopup="menu">
    <svg class="octicon octicon-plus" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M12 9H7v5H5V9H0V7h5V2h2v5h5v2z"></path></svg> <span class="dropdown-caret"></span>
  </summary>
  <details-menu class="dropdown-menu dropdown-menu-sw" role="menu">
    
<a role="menuitem" class="dropdown-item" href="https://github.com/new" data-ga-click="Header, create new repository">
  New repository
</a>

  <a role="menuitem" class="dropdown-item" href="https://github.com/new/import" data-ga-click="Header, import a repository">
    Import repository
  </a>

<a role="menuitem" class="dropdown-item" href="https://gist.github.com/" data-ga-click="Header, create new gist">
  New gist
</a>

  <a role="menuitem" class="dropdown-item" href="https://github.com/organizations/new" data-ga-click="Header, create new organization">
    New organization
  </a>


  <div class="dropdown-divider"></div>
  <div class="dropdown-header">
    <span title="axios/axios">This repository</span>
  </div>
    <a role="menuitem" class="dropdown-item" href="https://github.com/axios/axios/issues/new/choose" data-ga-click="Header, create new issue" data-skip-pjax="">
      New issue
    </a>


  </details-menu>
</details>

  </li>

  <li class="dropdown">
      <details class="details-overlay details-reset d-flex pl-2 flex-items-center">
        <summary class="HeaderNavlink name" aria-label="View profile and more" data-ga-click="Header, show menu, icon:avatar" aria-haspopup="menu">
          <img alt="@somkhane" class="avatar float-left mr-1" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/41472465.jpg" width="20" height="20">
          <span class="dropdown-caret"></span>
        </summary>
        <details-menu class="dropdown-menu dropdown-menu-sw" role="menu">
          <div class="header-nav-current-user css-truncate"><a role="menuitem" class="no-underline user-profile-link px-3 pt-2 pb-2 mb-n2 mt-n1 d-block" href="https://github.com/somkhane" data-ga-click="Header, go to profile, text:Signed in as">Signed in as <strong class="css-truncate-target">somkhane</strong></a></div>
          <div role="none" class="dropdown-divider"></div>

          <div class="px-3 f6 user-status-container js-user-status-context pb-1" data-url="/users/status?compact=1&amp;link_mentions=0&amp;truncate=1">
            
<div class="js-user-status-container user-status-compact" data-team-hovercards-enabled="">
  <details class="js-user-status-details details-reset details-overlay details-overlay-dark">
    <summary class="btn-link no-underline js-toggle-user-status-edit toggle-user-status-edit width-full" aria-haspopup="dialog" role="menuitem" data-hydro-click="{&quot;event_type&quot;:&quot;user_profile.click&quot;,&quot;payload&quot;:{&quot;profile_user_id&quot;:32372333,&quot;target&quot;:&quot;EDIT_USER_STATUS&quot;,&quot;user_id&quot;:41472465,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;}}" data-hydro-click-hmac="e103fdc95f2afd3a779dbbed027924a6ec1a9c5d9e5b6ff9ba5d97a4eea8dafa">
      <div class="f6 d-inline-block v-align-middle  user-status-emoji-only-header pl-0 circle lh-condensed user-status-header " style="max-width: 29px">
        <div class="user-status-emoji-container flex-shrink-0 mr-1">
          <svg class="octicon octicon-smiley" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm4.81 12.81a6.72 6.72 0 0 1-2.17 1.45c-.83.36-1.72.53-2.64.53-.92 0-1.81-.17-2.64-.53-.81-.34-1.55-.83-2.17-1.45a6.773 6.773 0 0 1-1.45-2.17A6.59 6.59 0 0 1 1.21 8c0-.92.17-1.81.53-2.64.34-.81.83-1.55 1.45-2.17.62-.62 1.36-1.11 2.17-1.45A6.59 6.59 0 0 1 8 1.21c.92 0 1.81.17 2.64.53.81.34 1.55.83 2.17 1.45.62.62 1.11 1.36 1.45 2.17.36.83.53 1.72.53 2.64 0 .92-.17 1.81-.53 2.64-.34.81-.83 1.55-1.45 2.17zM4 6.8v-.59c0-.66.53-1.19 1.2-1.19h.59c.66 0 1.19.53 1.19 1.19v.59c0 .67-.53 1.2-1.19 1.2H5.2C4.53 8 4 7.47 4 6.8zm5 0v-.59c0-.66.53-1.19 1.2-1.19h.59c.66 0 1.19.53 1.19 1.19v.59c0 .67-.53 1.2-1.19 1.2h-.59C9.53 8 9 7.47 9 6.8zm4 3.2c-.72 1.88-2.91 3-5 3s-4.28-1.13-5-3c-.14-.39.23-1 .66-1h8.59c.41 0 .89.61.75 1z"></path></svg>
        </div>
      </div>
      <div class="d-inline-block v-align-middle user-status-message-wrapper f6 lh-condensed ws-normal pt-1">
          <span class="link-gray">Set your status</span>
      </div>
</summary>    <details-dialog class="details-dialog rounded-1 anim-fade-in fast Box Box--overlay" role="dialog" tabindex="-1">
      <!-- '"` --><!-- </textarea></xmp> --><form class="position-relative flex-auto js-user-status-form" action="/users/status?compact=1&amp;link_mentions=0&amp;truncate=1" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="put"><input type="hidden" name="authenticity_token" value="a+fLX+PeF1lxgcK4GRYhNi8q+guEGs+u6ccE1K7rJkOi2eIBEO1h1iS9g6389VkE7VIoiLOuKYBPUq5rnBjcXw==">
        <div class="Box-header bg-gray border-bottom p-3">
          <button class="Box-btn-octicon js-toggle-user-status-edit btn-octicon float-right" type="reset" aria-label="Close dialog" data-close-dialog="">
            <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"></path></svg>
          </button>
          <h3 class="Box-title f5 text-bold text-gray-dark">Edit status</h3>
        </div>
        <input type="hidden" name="emoji" class="js-user-status-emoji-field" value="">
        <input type="hidden" name="organization_id" class="js-user-status-org-id-field" value="">
        <div class="px-3 py-2 text-gray-dark">
          <div class="js-characters-remaining-container js-suggester-container position-relative mt-2">
            <div class="input-group d-table form-group my-0 js-user-status-form-group">
              <span class="input-group-button d-table-cell v-align-middle" style="width: 1%">
                <button type="button" aria-label="Choose an emoji" class="btn-outline btn js-toggle-user-status-emoji-picker bg-white btn-open-emoji-picker">
                  <span class="js-user-status-original-emoji" hidden=""></span>
                  <span class="js-user-status-custom-emoji"></span>
                  <span class="js-user-status-no-emoji-icon">
                    <svg class="octicon octicon-smiley" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm4.81 12.81a6.72 6.72 0 0 1-2.17 1.45c-.83.36-1.72.53-2.64.53-.92 0-1.81-.17-2.64-.53-.81-.34-1.55-.83-2.17-1.45a6.773 6.773 0 0 1-1.45-2.17A6.59 6.59 0 0 1 1.21 8c0-.92.17-1.81.53-2.64.34-.81.83-1.55 1.45-2.17.62-.62 1.36-1.11 2.17-1.45A6.59 6.59 0 0 1 8 1.21c.92 0 1.81.17 2.64.53.81.34 1.55.83 2.17 1.45.62.62 1.11 1.36 1.45 2.17.36.83.53 1.72.53 2.64 0 .92-.17 1.81-.53 2.64-.34.81-.83 1.55-1.45 2.17zM4 6.8v-.59c0-.66.53-1.19 1.2-1.19h.59c.66 0 1.19.53 1.19 1.19v.59c0 .67-.53 1.2-1.19 1.2H5.2C4.53 8 4 7.47 4 6.8zm5 0v-.59c0-.66.53-1.19 1.2-1.19h.59c.66 0 1.19.53 1.19 1.19v.59c0 .67-.53 1.2-1.19 1.2h-.59C9.53 8 9 7.47 9 6.8zm4 3.2c-.72 1.88-2.91 3-5 3s-4.28-1.13-5-3c-.14-.39.23-1 .66-1h8.59c.41 0 .89.61.75 1z"></path></svg>
                  </span>
                </button>
              </span>
              <input type="text" autocomplete="off" data-maxlength="80" class="js-suggester-field d-table-cell width-full form-control js-user-status-message-field js-characters-remaining-field" placeholder="What's happening?" name="message" required="" aria-label="What is your current status?">
              <div class="error">Could not update your status, please try again.</div>
            </div>
            <div class="suggester-container">
              <div class="suggester js-suggester js-navigation-container" data-url="/autocomplete/user-suggestions" data-no-org-url="/autocomplete/user-suggestions" data-org-url="/suggestions" hidden="">
              </div>
            </div>
            <div style="margin-left: 53px" class="my-1 text-small label-characters-remaining js-characters-remaining" data-suffix="remaining" hidden="">
              80 remaining
            </div>
          </div>
          <include-fragment class="js-user-status-emoji-picker" data-url="/users/status/emoji"></include-fragment>
          <div class="overflow-auto border-bottom ml-n3 mr-n3 px-3" style="max-height: 33vh">
            <div class="user-status-suggestions js-user-status-suggestions collapsed overflow-hidden">
              <h4 class="f6 text-normal my-3">Suggestions:</h4>
              <div class="mx-3 mt-2 clearfix">
                  <div class="float-left col-6">
                      <button type="button" value=":palm_tree:" class="d-flex flex-items-baseline flex-items-stretch lh-condensed f6 btn-link link-gray no-underline js-predefined-user-status mb-1">
                        <div class="emoji-status-width mr-2 v-align-middle js-predefined-user-status-emoji">
                          <g-emoji alias="palm_tree" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f334.png">🌴</g-emoji>
                        </div>
                        <div class="d-flex flex-items-center no-underline js-predefined-user-status-message" style="border-left: 1px solid transparent">
                          On vacation
                        </div>
                      </button>
                      <button type="button" value=":face_with_thermometer:" class="d-flex flex-items-baseline flex-items-stretch lh-condensed f6 btn-link link-gray no-underline js-predefined-user-status mb-1">
                        <div class="emoji-status-width mr-2 v-align-middle js-predefined-user-status-emoji">
                          <g-emoji alias="face_with_thermometer" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f912.png">🤒</g-emoji>
                        </div>
                        <div class="d-flex flex-items-center no-underline js-predefined-user-status-message" style="border-left: 1px solid transparent">
                          Out sick
                        </div>
                      </button>
                  </div>
                  <div class="float-left col-6">
                      <button type="button" value=":house:" class="d-flex flex-items-baseline flex-items-stretch lh-condensed f6 btn-link link-gray no-underline js-predefined-user-status mb-1">
                        <div class="emoji-status-width mr-2 v-align-middle js-predefined-user-status-emoji">
                          <g-emoji alias="house" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f3e0.png">🏠</g-emoji>
                        </div>
                        <div class="d-flex flex-items-center no-underline js-predefined-user-status-message" style="border-left: 1px solid transparent">
                          Working from home
                        </div>
                      </button>
                      <button type="button" value=":dart:" class="d-flex flex-items-baseline flex-items-stretch lh-condensed f6 btn-link link-gray no-underline js-predefined-user-status mb-1">
                        <div class="emoji-status-width mr-2 v-align-middle js-predefined-user-status-emoji">
                          <g-emoji alias="dart" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f3af.png">🎯</g-emoji>
                        </div>
                        <div class="d-flex flex-items-center no-underline js-predefined-user-status-message" style="border-left: 1px solid transparent">
                          Focusing
                        </div>
                      </button>
                  </div>
              </div>
            </div>
            <div class="user-status-limited-availability-container">
              <div class="form-checkbox my-0">
                <input type="checkbox" name="limited_availability" value="1" class="js-user-status-limited-availability-checkbox" data-default-message="I may be slow to respond." aria-describedby="limited-availability-help-text-truncate-true" id="limited-availability-truncate-true">
                <label class="d-block f5 text-gray-dark mb-1" for="limited-availability-truncate-true">
                  Busy
                </label>
                <p class="note" id="limited-availability-help-text-truncate-true">
                  When others mention you, assign you, or request your review,
                  GitHub will let them know that you have limited availability.
                </p>
              </div>
            </div>
          </div>
            

<div class="d-inline-block f5 mr-2 pt-3 pb-2">
  <div class="d-inline-block mr-1">
    Clear status
  </div>

  <details class="js-user-status-expire-drop-down f6 dropdown details-reset details-overlay d-inline-block mr-2">
    <summary class="f5 btn-link link-gray-dark border px-2 py-1 rounded-1" aria-haspopup="true">
      <div class="js-user-status-expiration-interval-selected d-inline-block v-align-baseline">
        Never
      </div>
      <div class="dropdown-caret"></div>
    </summary>

    <ul class="dropdown-menu dropdown-menu-se pl-0 overflow-auto" style="width: 220px; max-height: 15.5em">
      <li>
        <button type="button" class="btn-link dropdown-item js-user-status-expire-button ws-normal" title="Never">
          <span class="d-inline-block text-bold mb-1">Never</span>
          <div class="f6 lh-condensed">Keep this status until you clear your status or edit your status.</div>
        </button>
      </li>
      <li class="dropdown-divider" role="separator"></li>
        <li>
          <button type="button" class="btn-link dropdown-item ws-normal js-user-status-expire-button" title="in 30 minutes" value="2019-03-31T15:48:21Z">
            in 30 minutes
          </button>
        </li>
        <li>
          <button type="button" class="btn-link dropdown-item ws-normal js-user-status-expire-button" title="in 1 hour" value="2019-03-31T16:18:21Z">
            in 1 hour
          </button>
        </li>
        <li>
          <button type="button" class="btn-link dropdown-item ws-normal js-user-status-expire-button" title="in 4 hours" value="2019-03-31T19:18:21Z">
            in 4 hours
          </button>
        </li>
        <li>
          <button type="button" class="btn-link dropdown-item ws-normal js-user-status-expire-button" title="today" value="2019-03-31T23:59:59Z">
            today
          </button>
        </li>
        <li>
          <button type="button" class="btn-link dropdown-item ws-normal js-user-status-expire-button" title="this week" value="2019-03-31T23:59:59Z">
            this week
          </button>
        </li>
    </ul>
  </details>
  <input class="js-user-status-expiration-date-input" type="hidden" name="expires_at" value="">
</div>

          <include-fragment class="js-user-status-org-picker" data-url="/users/status/organizations"></include-fragment>
        </div>
        <div class="d-flex flex-items-center flex-justify-between p-3 border-top">
          <button type="submit" disabled="disabled" class="width-full btn btn-primary mr-2 js-user-status-submit">
            Set status
          </button>
          <button type="button" disabled="disabled" class="width-full js-clear-user-status-button btn ml-2 ">
            Clear status
          </button>
        </div>
</form>    </details-dialog>
  </details>
</div>

          </div>
          <div role="none" class="dropdown-divider"></div>

          <a role="menuitem" class="dropdown-item" href="https://github.com/somkhane" data-ga-click="Header, go to profile, text:your profile">Your profile</a>
          <a role="menuitem" class="dropdown-item" href="https://github.com/somkhane?tab=repositories" data-ga-click="Header, go to repositories, text:your repositories">Your repositories</a>

          <a role="menuitem" class="dropdown-item" href="https://github.com/somkhane?tab=projects" data-ga-click="Header, go to projects, text:your projects">Your projects</a>

          <a role="menuitem" class="dropdown-item" href="https://github.com/somkhane?tab=stars" data-ga-click="Header, go to starred repos, text:your stars">Your stars</a>
            <a role="menuitem" class="dropdown-item" href="https://gist.github.com/" data-ga-click="Header, your gists, text:your gists">Your gists</a>

          <div role="none" class="dropdown-divider"></div>
          <a role="menuitem" class="dropdown-item" href="https://help.github.com/" data-ga-click="Header, go to help, text:help">Help</a>
          <a role="menuitem" class="dropdown-item" href="https://github.com/settings/profile" data-ga-click="Header, go to settings, icon:settings">Settings</a>
          <!-- '"` --><!-- </textarea></xmp> --><form class="logout-form" action="/logout" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="93MCT+jOUOxn+VzrLt79gxghXPqKzdcmnhMMsO2orx6NSehoEcXJOLJS6hINvrco3Ej5sfeFj8CNNX3d0XHzUQ==">
            
            <button type="submit" class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout" role="menuitem">
              Sign out
           </button>
</form>        </details-menu>
      </details>
  </li>
</ul>



        <!-- '"` --><!-- </textarea></xmp> --><form class="sr-only right-0" action="/logout" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="a88tUbXGQzboqGcyXBOU1Q24JQaxNFMrbtDZw59kQosR9cd2TM3a4j0D0ct/c95+ydGATcx8C8199qiuo70exA==">
          <button type="submit" class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
            Sign out
          </button>
</form>      </div>
    </div>
  </div>
</header>

      

  </div>

  <div id="start-of-content" class="show-on-focus"></div>

    <div id="js-flash-container">

</div>



  <div class="application-main " data-commit-hovercards-enabled="">
        <div itemscope="" itemtype="http://schema.org/SoftwareSourceCode" class="">
    <main id="js-repo-pjax-container" data-pjax-container="">
      
  



  




  <div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav  ">
    <div class="repohead-details-container clearfix container">

      <ul class="pagehead-actions">



  <li>
    
    <!-- '"` --><!-- </textarea></xmp> --><form data-remote="true" class="clearfix js-social-form js-social-container" action="/notifications/subscribe" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="GiOonHVZgyo7bMuLO1QtAYBgaEbHk6liNO8w9919PckjhEyvpyMuWjGvN8E5jgxdb6ydMRJmq7Po9Mj+z34UqQ==">      <input type="hidden" name="repository_id" value="23088740">

      <details class="details-reset details-overlay select-menu float-left">
        <summary class="select-menu-button float-left btn btn-sm btn-with-count" data-hydro-click="{&quot;event_type&quot;:&quot;repository.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;WATCH_BUTTON&quot;,&quot;repository_id&quot;:23088740,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;user_id&quot;:41472465}}" data-hydro-click-hmac="e9bc5f21d038e7d3591f8d6a0751fd2b8019c54c047ad73ed46c0b2e100b3e7e" data-ga-click="Repository, click Watch settings, action:files#disambiguate" aria-haspopup="menu">          <span data-menu-button="">
              <svg class="octicon octicon-eye v-align-text-bottom" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"></path></svg>
              Watch
          </span>
</summary>        <details-menu class="select-menu-modal position-absolute mt-5" style="z-index: 99;" role="menu">
          <div class="select-menu-header">
            <span class="select-menu-title">Notifications</span>
          </div>
          <div class="select-menu-list">
            <button type="submit" name="do" value="included" class="select-menu-item width-full" aria-checked="true" role="menuitemradio">
              <svg class="octicon octicon-check select-menu-item-icon" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5L12 5z"></path></svg>
              <div class="select-menu-item-text">
                <span class="select-menu-item-heading">Not watching</span>
                <span class="description">Be notified only when participating or @mentioned.</span>
                <span class="hidden-select-button-text" data-menu-button-contents="">
                  <svg class="octicon octicon-eye v-align-text-bottom" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"></path></svg>
                  Watch
                </span>
              </div>
            </button>

            <button type="submit" name="do" value="release_only" class="select-menu-item width-full" aria-checked="false" role="menuitemradio">
              <svg class="octicon octicon-check select-menu-item-icon" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5L12 5z"></path></svg>
              <div class="select-menu-item-text">
                <span class="select-menu-item-heading">Releases only</span>
                <span class="description">Be notified of new releases, and when participating or @mentioned.</span>
                <span class="hidden-select-button-text" data-menu-button-contents="">
                  <svg class="octicon octicon-eye v-align-text-bottom" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"></path></svg>
                  Unwatch releases
                </span>
              </div>
            </button>

            <button type="submit" name="do" value="subscribed" class="select-menu-item width-full" aria-checked="false" role="menuitemradio">
              <svg class="octicon octicon-check select-menu-item-icon" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5L12 5z"></path></svg>
              <div class="select-menu-item-text">
                <span class="select-menu-item-heading">Watching</span>
                <span class="description">Be notified of all conversations.</span>
                <span class="hidden-select-button-text" data-menu-button-contents="">
                  <svg class="octicon octicon-eye v-align-text-bottom" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"></path></svg>
                  Unwatch
                </span>
              </div>
            </button>

            <button type="submit" name="do" value="ignore" class="select-menu-item width-full" aria-checked="false" role="menuitemradio">
              <svg class="octicon octicon-check select-menu-item-icon" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5L12 5z"></path></svg>
              <div class="select-menu-item-text">
                <span class="select-menu-item-heading">Ignoring</span>
                <span class="description">Never be notified.</span>
                <span class="hidden-select-button-text" data-menu-button-contents="">
                  <svg class="octicon octicon-mute v-align-text-bottom" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8 2.81v10.38c0 .67-.81 1-1.28.53L3 10H1c-.55 0-1-.45-1-1V7c0-.55.45-1 1-1h2l3.72-3.72C7.19 1.81 8 2.14 8 2.81zm7.53 3.22l-1.06-1.06-1.97 1.97-1.97-1.97-1.06 1.06L11.44 8 9.47 9.97l1.06 1.06 1.97-1.97 1.97 1.97 1.06-1.06L13.56 8l1.97-1.97z"></path></svg>
                  Stop ignoring
                </span>
              </div>
            </button>
          </div>
        </details-menu>
      </details>
        <a class="social-count js-social-count" href="https://github.com/axios/axios/watchers" aria-label="1086 users are watching this repository">
          1,086
        </a>
</form>
  </li>

  <li>
      <div class="js-toggler-container js-social-container starring-container ">
    <!-- '"` --><!-- </textarea></xmp> --><form class="starred js-social-form" action="/axios/axios/unstar" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="wBO53lZrqQZZTtaMbL38tIr5xe4RmqlEiF5QxzNJdaICXtmTWSiDyZgrK4+cYMSfI7iZLiXYynbHN/pS6JlbQg==">
      <input type="hidden" name="context" value="repository">
      <button type="submit" class="btn btn-sm btn-with-count js-toggler-target" aria-label="Unstar this repository" title="Unstar axios/axios" data-hydro-click="{&quot;event_type&quot;:&quot;repository.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;UNSTAR_BUTTON&quot;,&quot;repository_id&quot;:23088740,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;user_id&quot;:41472465}}" data-hydro-click-hmac="afaca04c48565f933ca3532623da172d21ce08eeb9fe4ba26a30dd20b6654d4e" data-ga-click="Repository, click unstar button, action:files#disambiguate; text:Unstar">        <svg class="octicon octicon-star v-align-text-bottom" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74L14 6z"></path></svg>
        Unstar
</button>        <a class="social-count js-social-count" href="https://github.com/axios/axios/stargazers" aria-label="57223 users starred this repository">
          57,223
        </a>
</form>
    <!-- '"` --><!-- </textarea></xmp> --><form class="unstarred js-social-form" action="/axios/axios/star" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="bkJ+cjJj7jj1NfQ1bng9unUkFSwZSzJAKz3IoZ4+xeFe2qXSw4k7+ebje3h34HGHlSlbMopdyZosReGKqU3RLA==">
      <input type="hidden" name="context" value="repository">
      <button type="submit" class="btn btn-sm btn-with-count js-toggler-target" aria-label="Unstar this repository" title="Star axios/axios" data-hydro-click="{&quot;event_type&quot;:&quot;repository.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;STAR_BUTTON&quot;,&quot;repository_id&quot;:23088740,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;user_id&quot;:41472465}}" data-hydro-click-hmac="7251a677074af1b004dea20ee0c3667aeb1aece9628ba5ecd75a60a9a58b50bc" data-ga-click="Repository, click star button, action:files#disambiguate; text:Star">        <svg class="octicon octicon-star v-align-text-bottom" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74L14 6z"></path></svg>
        Star
</button>        <a class="social-count js-social-count" href="https://github.com/axios/axios/stargazers" aria-label="57223 users starred this repository">
          57,223
        </a>
</form>  </div>

  </li>

  <li>
          <details class="details-reset details-overlay details-overlay-dark d-inline-block float-left" data-deferred-details-content-url="/axios/axios/fork?fragment=1">
            <summary class="btn btn-sm btn-with-count" data-hydro-click="{&quot;event_type&quot;:&quot;repository.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;FORK_BUTTON&quot;,&quot;repository_id&quot;:23088740,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;user_id&quot;:41472465}}" data-hydro-click-hmac="92c3785d6683f8391ee07a38240aeece7b090d95180384892e9d6a0c78e734d7" data-ga-click="Repository, show fork modal, action:files#disambiguate; text:Fork" type="submit" title="Fork your own copy of axios/axios to your account" aria-label="Fork your own copy of axios/axios to your account" aria-haspopup="dialog">              <svg class="octicon octicon-repo-forked v-align-text-bottom" viewBox="0 0 10 16" version="1.1" width="10" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8 1a1.993 1.993 0 0 0-1 3.72V6L5 8 3 6V4.72A1.993 1.993 0 0 0 2 1a1.993 1.993 0 0 0-1 3.72V6.5l3 3v1.78A1.993 1.993 0 0 0 5 15a1.993 1.993 0 0 0 1-3.72V9.5l3-3V4.72A1.993 1.993 0 0 0 8 1zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3 10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3-10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"></path></svg>
              Fork
</summary>            <details-dialog class="anim-fade-in fast Box Box--overlay d-flex flex-column" role="dialog">
              <div class="Box-header">
                <button class="Box-btn-octicon btn-octicon float-right" type="button" aria-label="Close dialog" data-close-dialog="">
                  <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"></path></svg>
                </button>
                <h3 class="Box-title">Fork axios</h3>
              </div>
              <div class="overflow-auto text-center">
                <include-fragment>
                  <div class="octocat-spinner my-3" aria-label="Loading..."></div>
                  <p class="f5 text-gray">If this dialog fails to load, you can visit <a href="https://github.com/axios/axios/fork">the fork page</a> directly.</p>
                </include-fragment>
              </div>
            </details-dialog>
          </details>

    <a href="https://github.com/axios/axios/network/members" class="social-count" aria-label="4467 users forked this repository">
      4,467
    </a>
  </li>
</ul>

      <h1 class="public ">
  <svg class="octicon octicon-repo" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"></path></svg>
  <span class="author" itemprop="author"><a class="url fn" rel="author" data-hovercard-type="organization" data-hovercard-url="/orgs/axios/hovercard" href="https://github.com/axios">axios</a></span><!--
--><span class="path-divider">/</span><!--
--><strong itemprop="name"><a data-pjax="#js-repo-pjax-container" href="https://github.com/axios/axios">axios</a></strong>

</h1>

    </div>
    
<nav class="reponav js-repo-nav js-sidenav-container-pjax container" itemscope="" itemtype="http://schema.org/BreadcrumbList" aria-label="Repository" data-pjax="#js-repo-pjax-container">

  <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a class="js-selected-navigation-item selected reponav-item" itemprop="url" data-hotkey="g c" aria-current="page" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches repo_packages /axios/axios" href="https://github.com/axios/axios">
      <svg class="octicon octicon-code" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"></path></svg>
      <span itemprop="name">Code</span>
      <meta itemprop="position" content="1">
</a>  </span>

    <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a itemprop="url" data-hotkey="g i" class="js-selected-navigation-item reponav-item" data-selected-links="repo_issues repo_labels repo_milestones /axios/axios/issues" href="https://github.com/axios/axios/issues">
        <svg class="octicon octicon-issue-opened" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"></path></svg>
        <span itemprop="name">Issues</span>
        <span class="Counter">463</span>
        <meta itemprop="position" content="2">
</a>    </span>

  <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a data-hotkey="g p" itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_pulls checks /axios/axios/pulls" href="https://github.com/axios/axios/pulls">
      <svg class="octicon octicon-git-pull-request" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M11 11.28V5c-.03-.78-.34-1.47-.94-2.06C9.46 2.35 8.78 2.03 8 2H7V0L4 3l3 3V4h1c.27.02.48.11.69.31.21.2.3.42.31.69v6.28A1.993 1.993 0 0 0 10 15a1.993 1.993 0 0 0 1-3.72zm-1 2.92c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zM4 3c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v6.56A1.993 1.993 0 0 0 2 15a1.993 1.993 0 0 0 1-3.72V4.72c.59-.34 1-.98 1-1.72zm-.8 10c0 .66-.55 1.2-1.2 1.2-.65 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"></path></svg>
      <span itemprop="name">Pull requests</span>
      <span class="Counter">107</span>
      <meta itemprop="position" content="3">
</a>  </span>


    <a data-hotkey="g b" class="js-selected-navigation-item reponav-item" data-selected-links="repo_projects new_repo_project repo_project /axios/axios/projects" href="https://github.com/axios/axios/projects">
      <svg class="octicon octicon-project" viewBox="0 0 15 16" version="1.1" width="15" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"></path></svg>
      Projects
      <span class="Counter">2</span>
</a>


    <a class="js-selected-navigation-item reponav-item" data-selected-links="repo_graphs repo_contributors dependency_graph pulse alerts security people /axios/axios/pulse" href="https://github.com/axios/axios/pulse">
      <svg class="octicon octicon-graph" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M16 14v1H0V0h1v14h15zM5 13H3V8h2v5zm4 0H7V3h2v10zm4 0h-2V6h2v7z"></path></svg>
      Insights
</a>

</nav>


  </div>
<div class="container new-discussion-timeline experiment-repo-nav  ">
  <div class="repository-content ">

    
    
  


      <div class="">  <div class="f4">
        <span class="text-gray-dark mr-2" itemprop="about">
          Promise based HTTP client for the browser and node.js
        </span>
  </div>
</div>

    <div class="repository-topics-container mt-2 mb-3 js-topics-list-container">  <div class="list-topics-container f6">
      <a href="https://github.com/topics/http-client" class="topic-tag topic-tag-link" data-ga-click="Topic, repository page" data-octo-click="topic_click" data-octo-dimensions="topic:http-client">
        http-client
      </a>
      <a href="https://github.com/topics/javascript" class="topic-tag topic-tag-link" data-ga-click="Topic, repository page" data-octo-click="topic_click" data-octo-dimensions="topic:javascript">
        javascript
      </a>
      <a href="https://github.com/topics/nodejs" class="topic-tag topic-tag-link" data-ga-click="Topic, repository page" data-octo-click="topic_click" data-octo-dimensions="topic:nodejs">
        nodejs
      </a>
      <a href="https://github.com/topics/promise" class="topic-tag topic-tag-link" data-ga-click="Topic, repository page" data-octo-click="topic_click" data-octo-dimensions="topic:promise">
        promise
      </a>
  </div>
</div>



  <div class="overall-summary overall-summary-bottomless">
    <div class="stats-switcher-viewport js-stats-switcher-viewport">
      <div class="stats-switcher-wrapper">
      <ul class="numbers-summary">
        <li class="commits">
          <a data-pjax="" href="https://github.com/axios/axios/commits/master">
              <svg class="octicon octicon-history" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8 13H6V6h5v2H8v5zM7 1C4.81 1 2.87 2.02 1.59 3.59L0 2v4h4L2.5 4.5C3.55 3.17 5.17 2.3 7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-.34.03-.67.09-1H.08C.03 7.33 0 7.66 0 8c0 3.86 3.14 7 7 7s7-3.14 7-7-3.14-7-7-7z"></path></svg>
              <span class="num text-emphasized">
                839
              </span>
              commits
          </a>
        </li>
        <li>
          <a data-pjax="" href="https://github.com/axios/axios/branches">
            <svg class="octicon octicon-git-branch" viewBox="0 0 10 16" version="1.1" width="10" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M10 5c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v.3c-.02.52-.23.98-.63 1.38-.4.4-.86.61-1.38.63-.83.02-1.48.16-2 .45V4.72a1.993 1.993 0 0 0-1-3.72C.88 1 0 1.89 0 3a2 2 0 0 0 1 1.72v6.56c-.59.35-1 .99-1 1.72 0 1.11.89 2 2 2 1.11 0 2-.89 2-2 0-.53-.2-1-.53-1.36.09-.06.48-.41.59-.47.25-.11.56-.17.94-.17 1.05-.05 1.95-.45 2.75-1.25S8.95 7.77 9 6.73h-.02C9.59 6.37 10 5.73 10 5zM2 1.8c.66 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2C1.35 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2zm0 12.41c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm6-8c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"></path></svg>
            <span class="num text-emphasized">
              9
            </span>
            branches
          </a>
        </li>

        <li>
          <a href="https://github.com/axios/axios/releases">
            <svg class="octicon octicon-tag" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.73 1.73C7.26 1.26 6.62 1 5.96 1H3.5C2.13 1 1 2.13 1 3.5v2.47c0 .66.27 1.3.73 1.77l6.06 6.06c.39.39 1.02.39 1.41 0l4.59-4.59a.996.996 0 0 0 0-1.41L7.73 1.73zM2.38 7.09c-.31-.3-.47-.7-.47-1.13V3.5c0-.88.72-1.59 1.59-1.59h2.47c.42 0 .83.16 1.13.47l6.14 6.13-4.73 4.73-6.13-6.15zM3.01 3h2v2H3V3h.01z"></path></svg>
            <span class="num text-emphasized">
              38
            </span>
            releases
          </a>
        </li>


          <li>
              <a href="https://github.com/axios/axios/graphs/contributors">
  <svg class="octicon octicon-organization" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M16 12.999c0 .439-.45 1-1 1H7.995c-.539 0-.994-.447-.995-.999H1c-.54 0-1-.561-1-1 0-2.634 3-4 3-4s.229-.409 0-1c-.841-.621-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.442.58 2.5 3c.058 2.41-.159 2.379-1 3-.229.59 0 1 0 1s1.549.711 2.42 2.088C9.196 9.369 10 8.999 10 8.999s.229-.409 0-1c-.841-.62-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.437.581 2.495 3c.059 2.41-.158 2.38-1 3-.229.59 0 1 0 1s3.005 1.366 3.005 4z"></path></svg>
    <span class="num text-emphasized">
      159
    </span>
    contributors
</a>

          </li>

          <li>
            <a href="https://github.com/axios/axios/blob/master/LICENSE">
              <svg class="octicon octicon-law" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7 4c-.83 0-1.5-.67-1.5-1.5S6.17 1 7 1s1.5.67 1.5 1.5S7.83 4 7 4zm7 6c0 1.11-.89 2-2 2h-1c-1.11 0-2-.89-2-2l2-4h-1c-.55 0-1-.45-1-1H8v8c.42 0 1 .45 1 1h1c.42 0 1 .45 1 1H3c0-.55.58-1 1-1h1c0-.55.58-1 1-1h.03L6 5H5c0 .55-.45 1-1 1H3l2 4c0 1.11-.89 2-2 2H2c-1.11 0-2-.89-2-2l2-4H1V5h3c0-.55.45-1 1-1h4c.55 0 1 .45 1 1h3v1h-1l2 4zM2.5 7L1 10h3L2.5 7zM13 10l-1.5-3-1.5 3h3z"></path></svg>
                MIT
            </a>
          </li>
      </ul>

        <div class="repository-lang-stats">
          <ol class="repository-lang-stats-numbers">
            <li>
                <a href="https://github.com/axios/axios/search?l=javascript" data-ga-click="Repository, language stats search click, location:repo overview">
                  <span class="color-block language-color" style="background-color:#f1e05a;"></span>
                  <span class="lang">JavaScript</span>
                  <span class="percent">91.7%</span>
                </a>
            </li>
            <li>
                <a href="https://github.com/axios/axios/search?l=typescript" data-ga-click="Repository, language stats search click, location:repo overview">
                  <span class="color-block language-color" style="background-color:#2b7489;"></span>
                  <span class="lang">TypeScript</span>
                  <span class="percent">4.7%</span>
                </a>
            </li>
            <li>
                <a href="https://github.com/axios/axios/search?l=html" data-ga-click="Repository, language stats search click, location:repo overview">
                  <span class="color-block language-color" style="background-color:#e34c26;"></span>
                  <span class="lang">HTML</span>
                  <span class="percent">3.6%</span>
                </a>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>

    <button type="button" class="d-flex p-0 repository-lang-stats-graph js-toggle-lang-stats" title="Click for language details" data-ga-click="Repository, language bar stats toggle, location:repo overview">
      <span class="language-color" aria-label="JavaScript 91.7%" style="width:91.7%; background-color:#f1e05a;" itemprop="keywords">JavaScript</span>
      <span class="language-color" aria-label="TypeScript 4.7%" style="width:4.7%; background-color:#2b7489;" itemprop="keywords">TypeScript</span>
      <span class="language-color" aria-label="HTML 3.6%" style="width:3.6%; background-color:#e34c26;" itemprop="keywords">HTML</span>
  </button>





    <div class="mt-2">
      
    </div>

  <div class="file-navigation in-mid-page d-flex flex-items-start">
  
<details class="details-reset details-overlay select-menu branch-select-menu">
  <summary class="btn btn-sm select-menu-button css-truncate" data-hotkey="w" title="Switch branches or tags" aria-haspopup="menu">
    <i>Branch:</i>
    <span class="css-truncate-target">master</span>
  </summary>

  <details-menu class="select-menu-modal position-absolute" style="z-index: 99;" src="/axios/axios/ref-list/master?source_action=disambiguate&amp;source_controller=files" preload="" role="menu">
    <include-fragment class="select-menu-loading-overlay anim-pulse">
      <svg height="32" class="octicon octicon-octoface" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M14.7 5.34c.13-.32.55-1.59-.13-3.31 0 0-1.05-.33-3.44 1.3-1-.28-2.07-.32-3.13-.32s-2.13.04-3.13.32c-2.39-1.64-3.44-1.3-3.44-1.3-.68 1.72-.26 2.99-.13 3.31C.49 6.21 0 7.33 0 8.69 0 13.84 3.33 15 7.98 15S16 13.84 16 8.69c0-1.36-.49-2.48-1.3-3.35zM8 14.02c-3.3 0-5.98-.15-5.98-3.35 0-.76.38-1.48 1.02-2.07 1.07-.98 2.9-.46 4.96-.46 2.07 0 3.88-.52 4.96.46.65.59 1.02 1.3 1.02 2.07 0 3.19-2.68 3.35-5.98 3.35zM5.49 9.01c-.66 0-1.2.8-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.54-1.78-1.2-1.78zm5.02 0c-.66 0-1.2.79-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.53-1.78-1.2-1.78z"></path></svg>
    </include-fragment>
  </details-menu>
</details>


        <a class="btn btn-sm new-pull-request-btn" data-hydro-click="{&quot;event_type&quot;:&quot;repository.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;NEW_PULL_REQUEST_BUTTON&quot;,&quot;repository_id&quot;:23088740,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;user_id&quot;:41472465}}" data-hydro-click-hmac="7de28b67b6c7173e906c3b7641da6decd24e523044fb115f6455a292700e169b" data-ga-click="Repository, new pull request, location:repo overview" data-pjax="true" href="https://github.com/axios/axios/pull/new/master">New pull request</a>

  <div class="breadcrumb flex-auto">
    
  </div>

  <div class="BtnGroup">
      
  <!-- '"` --><!-- </textarea></xmp> --><form class="BtnGroup-parent" action="/axios/axios/new/master" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="nVrkugNrCRft7Lei4Pez1DuE4lhrh3sLvzBOGeL4AxG8OsL8KNRTD+pvJS992pZPiKI63i36QSPg7gaw5Ai8zg==">
    <button class="btn btn-sm BtnGroup-item" type="submit" data-disable-with="Creating file…">
      Create new file
    </button>
</form>

      
  <a href="https://github.com/axios/axios/upload/master" class="btn btn-sm BtnGroup-item">
    Upload files
  </a>


    <a class="btn btn-sm empty-icon float-right BtnGroup-item" data-hydro-click="{&quot;event_type&quot;:&quot;repository.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;FIND_FILE_BUTTON&quot;,&quot;repository_id&quot;:23088740,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;user_id&quot;:41472465}}" data-hydro-click-hmac="7a15da0dfe4346a3f2b4535afe6fbef1aad58ce8fce1b7edc36ed20641d8a457" data-ga-click="Repository, find file, location:repo overview" data-hotkey="t" data-pjax="true" href="https://github.com/axios/axios/find/master">Find File</a>
  </div>


    <details class="get-repo-select-menu js-get-repo-select-menu  position-relative details-overlay details-reset">
  <summary class="btn btn-sm btn-primary" data-hydro-click="{&quot;event_type&quot;:&quot;repository.click&quot;,&quot;payload&quot;:{&quot;repository_id&quot;:23088740,&quot;target&quot;:&quot;CLONE_OR_DOWNLOAD_BUTTON&quot;,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;user_id&quot;:41472465}}" data-hydro-click-hmac="90b280bab9b0f3e55e9f281d0bc02d5eb8f40d273135991ecf9660054c6d0d5c">
    Clone or download
    <span class="dropdown-caret"></span>
</summary>  <div class="position-relative">
    <div class="get-repo-modal dropdown-menu dropdown-menu-sw pb-0 js-toggler-container  js-get-repo-modal">

      <div class="get-repo-modal-options">
          <div class="clone-options https-clone-options">
              <!-- '"` --><!-- </textarea></xmp> --><form data-remote="true" action="/users/set_protocol?protocol_selector=ssh&amp;protocol_type=clone" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="iWlEnFpSINdeO1OreV+hf75J4sMPcv0KfDgsKkXfWU6WvmN2fLVY1Bv+GZ1gC35OmiZE+z7+W1u/sZM4Ksrubw=="><button name="button" type="submit" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;USE_SSH&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:23088740,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;user_id&quot;:41472465}}" data-hydro-click-hmac="c976a6dbe4be83e401ecad96af6fedf7afc9deeb88e80b89fe3a7c23a3ce4f7f" class="btn-link btn-change-protocol js-toggler-target float-right">Use SSH</button></form>

            <h4 class="mb-1">
              Clone with HTTPS
              <a class="muted-link" href="https://help.github.com/articles/which-remote-url-should-i-use" target="_blank" title="Which remote URL should I use?">
                <svg class="octicon octicon-question" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 10h2v2H6v-2zm4-3.5C10 8.64 8 9 8 9H6c0-.55.45-1 1-1h.5c.28 0 .5-.22.5-.5v-1c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5V7H4c0-1.5 1.5-3 3-3s3 1 3 2.5zM7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7z"></path></svg>
              </a>
            </h4>
            <p class="mb-2 get-repo-decription-text">
              Use Git or checkout with SVN using the web URL.
            </p>

            <div class="input-group">
  <input type="text" class="form-control input-monospace input-sm" data-autoselect="" value="https://github.com/axios/axios.git" aria-label="Clone this repository at https://github.com/axios/axios.git" readonly="readonly">
  <div class="input-group-button">
    <clipboard-copy value="https://github.com/axios/axios.git" aria-label="Copy to clipboard" class="btn btn-sm" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;COPY_URL&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:23088740,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;user_id&quot;:41472465}}" data-hydro-click-hmac="a7bca12971a6dab618370ac22b865687c9cbc004eb9a5cdd87a650cbd8777d48" tabindex="0" role="button"><svg class="octicon octicon-clippy" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"></path></svg></clipboard-copy>
  </div>
</div>

          </div>

          <div class="clone-options ssh-clone-options">
              <!-- '"` --><!-- </textarea></xmp> --><form data-remote="true" action="/users/set_protocol?protocol_selector=https&amp;protocol_type=clone" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="FWfoM5mTXhtDEp/yKiRCyz0tgD1XZ0Ayy0jZOWncq04KsM/Zv3QmGAbX1cQzcJ36GUImBWbr5mMIwWYrBskcbw=="><button name="button" type="submit" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;USE_HTTPS&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:23088740,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;user_id&quot;:41472465}}" data-hydro-click-hmac="70b5ad777a9d936f635b2b7498b7197155cb83c0d1160bc8c932614a580841dc" class="btn-link btn-change-protocol js-toggler-target float-right">Use HTTPS</button></form>

              <h4 class="mb-1">
                Clone with SSH
                <a class="muted-link" href="https://help.github.com/articles/which-remote-url-should-i-use" target="_blank" title="Which remote URL should I use?">
                  <svg class="octicon octicon-question" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 10h2v2H6v-2zm4-3.5C10 8.64 8 9 8 9H6c0-.55.45-1 1-1h.5c.28 0 .5-.22.5-.5v-1c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5V7H4c0-1.5 1.5-3 3-3s3 1 3 2.5zM7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7z"></path></svg>
                </a>
              </h4>
              <p class="mb-2 get-repo-decription-text">
                Use an SSH key and passphrase from account.
              </p>

              <div class="input-group">
  <input type="text" class="form-control input-monospace input-sm" data-autoselect="" value="git@github.com:axios/axios.git" aria-label="Clone this repository at git@github.com:axios/axios.git" readonly="readonly">
  <div class="input-group-button">
    <clipboard-copy value="git@github.com:axios/axios.git" aria-label="Copy to clipboard" class="btn btn-sm" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;COPY_URL&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:23088740,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;user_id&quot;:41472465}}" data-hydro-click-hmac="a7bca12971a6dab618370ac22b865687c9cbc004eb9a5cdd87a650cbd8777d48" tabindex="0" role="button"><svg class="octicon octicon-clippy" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"></path></svg></clipboard-copy>
  </div>
</div>

          </div>
        <div class="mt-2">
            <a class="btn btn-outline get-repo-btn tooltipped tooltipped-s tooltipped-multiline js-get-repo" aria-label="Clone axios/axios to your computer and use it in GitHub Desktop." data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;OPEN_IN_DESKTOP&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:23088740,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;user_id&quot;:41472465}}" data-hydro-click-hmac="be98b5c02dfc3c9a7c00dd6014edb292cfaae9612905ddd2adc35c0b4ace4283" data-open-app="windows" href="https://desktop.github.com/">Open in Desktop</a>

<a class="btn btn-outline get-repo-btn  " rel="nofollow" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;DOWNLOAD_ZIP&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:23088740,&quot;client_id&quot;:&quot;384037163.1531241271&quot;,&quot;originating_request_id&quot;:&quot;CE34:4F49:529B68:772CBB:5CA0DA3C&quot;,&quot;originating_url&quot;:&quot;https://github.com/axios/axios&quot;,&quot;referrer&quot;:&quot;https://www.google.com/&quot;,&quot;user_id&quot;:41472465}}" data-hydro-click-hmac="090c23dc41f6cd1ecd9efdc4b5f2130b52c974c29641d21d53655493ad15f68b" data-ga-click="Repository, download zip, location:repo overview" href="https://github.com/axios/axios/archive/master.zip">Download ZIP</a>

        </div>
      </div>


      <div class="js-modal-download-mac py-2 px-3 d-none">
        <h4 class="lh-condensed mb-3">Launching GitHub Desktop<span class="animated-ellipsis-container"><span class="animated-ellipsis">...</span></span></h4>
        <p class="text-gray">If nothing happens, <a href="https://desktop.github.com/">download GitHub Desktop</a> and try again.</p>
        <p><button class="btn-link js-get-repo-modal-download-back">Go back</button></p>
      </div>

      <div class="js-modal-download-windows py-2 px-3 d-none">
        <h4 class="lh-condensed mb-3">Launching GitHub Desktop<span class="animated-ellipsis-container"><span class="animated-ellipsis">...</span></span></h4>
        <p class="text-gray">If nothing happens, <a href="https://desktop.github.com/">download GitHub Desktop</a> and try again.</p>
        <p><button class="btn-link js-get-repo-modal-download-back">Go back</button></p>
      </div>

      <div class="js-modal-download-xcode py-2 px-3 d-none">
        <h4 class="lh-condensed mb-3">Launching Xcode<span class="animated-ellipsis-container"><span class="animated-ellipsis">...</span></span></h4>
        <p class="text-gray">If nothing happens, <a href="https://developer.apple.com/xcode/">download Xcode</a> and try again.</p>
        <p><button class="btn-link js-get-repo-modal-download-back">Go back</button></p>
      </div>

      <div class="js-modal-download-visual-studio py-2 px-3 d-none">
        <h4 class="lh-condensed mb-3">Launching Visual Studio<span class="animated-ellipsis-container"><span class="animated-ellipsis">...</span></span></h4>
        <p class="text-gray">If nothing happens, <a href="https://visualstudio.github.com/">download the GitHub extension for Visual Studio</a> and try again.</p>
        <p><button class="btn-link js-get-repo-modal-download-back">Go back</button></p>
      </div>

    </div>
  </div>
</details>

</div>


  


  <div class="commit-tease js-details-container Details d-flex rounded-top-1" data-issue-and-pr-hovercards-enabled="">
    
<div class="AvatarStack flex-self-start AvatarStack--two">
  <div class="AvatarStack-body" aria-label="Weffe and emilyemorehouse (non-author committer)">
        <a class="avatar" data-skip-pjax="true" data-hovercard-type="user" data-hovercard-url="/hovercards?user_id=6274727" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="https://github.com/Weffe">
          <img alt="@Weffe" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/6274727.png" width="20" height="20">
</a>        <a class="avatar" data-skip-pjax="true" data-hovercard-type="user" data-hovercard-url="/hovercards?user_id=4264897" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="https://github.com/emilyemorehouse">
          <img alt="@emilyemorehouse" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/4264897.jpg" width="20" height="20">
</a>  </div>
</div>

    <div class="flex-auto f6 mr-3">
      
      <a href="https://github.com/axios/axios/commits?author=Weffe" class="commit-author tooltipped tooltipped-s user-mention" aria-label="View all commits by Weffe">Weffe</a>


   and   <a href="https://github.com/axios/axios/commits?author=emilyemorehouse" class="commit-author tooltipped tooltipped-s user-mention" aria-label="View all commits by emilyemorehouse">emilyemorehouse</a>

  


        <a data-pjax="true" title="docs(ECOSYSTEM): add axios-api-versioning (#2020)" class="message" href="https://github.com/axios/axios/commit/283d7b306ce231f092d28e01713905e5c1600d14">docs(ECOSYSTEM): add axios-api-versioning (</a><a class="issue-link js-issue-link" data-error-text="Failed to load issue title" data-id="415387328" data-permission-text="Issue title is private" data-url="https://github.com/axios/axios/issues/2020" data-hovercard-type="pull_request" data-hovercard-url="/axios/axios/pull/2020/hovercard" href="https://github.com/axios/axios/pull/2020">#2020</a><a data-pjax="true" title="docs(ECOSYSTEM): add axios-api-versioning (#2020)" class="message" href="https://github.com/axios/axios/commit/283d7b306ce231f092d28e01713905e5c1600d14">)</a>

    </div>
    <div class="no-wrap">
      Latest commit
      <a class="commit-tease-sha" href="https://github.com/axios/axios/commit/283d7b306ce231f092d28e01713905e5c1600d14" data-pjax="">
        283d7b3
      </a>
      <span itemprop="dateModified"><relative-time datetime="2019-03-04T19:16:10Z" title="5 มี.ค. 2562 02:16 GMT+7">27 days ago</relative-time></span>
    </div>
  </div>



<div class="file-wrap">
  <a class="d-none js-permalink-shortcut" data-hotkey="y" href="https://github.com/axios/axios/tree/283d7b306ce231f092d28e01713905e5c1600d14">Permalink</a>

  <table class="files js-navigation-container js-active-navigation-container" data-pjax="">
    <thead>
      <tr>
        <th><span class="sr-only">Type</span></th>
        <th><span class="sr-only">Name</span></th>
        <th><span class="sr-only">Latest commit message</span></th>
        <th><span class="sr-only">Commit time</span></th>
      </tr>
    </thead>


    <tbody>
      <tr class="warning include-fragment-error">
        <td class="icon"><svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 0 0 0 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 0 0 .01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"></path></svg></td>
        <td class="content" colspan="3">Failed to load latest commit information.</td>
      </tr>

        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="directory" class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" role="img"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title=".github" id="01777e4a9846fea5f3fcc8fe40d44680-80238a57300dc64bb05c1b1597ba937813f7552d" href="https://github.com/axios/axios/tree/master/.github">.github</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Add issue templates" class="link-gray" href="https://github.com/axios/axios/commit/e122c80c9ddb17e4dad2b6225da2ed9e95e986c7">Add issue templates</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2019-02-04T05:41:08Z" title="4 ก.พ. 2562 12:41 GMT+7">2 months ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item" aria-selected="false">
          <td class="icon">
            <svg aria-label="directory" class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" role="img"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="dist" id="2a6d07eef8b10b84129b42424ed99327-696d37ddfe6113a3b0a48ec6301cfd3ec0d39ebf" href="https://github.com/axios/axios/tree/master/dist">dist</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Releasing 0.19.0-beta.1" class="link-gray" href="https://github.com/axios/axios/commit/527381198e8112dd298918b3d9d6c643763a59c3">Releasing 0.19.0-beta.1</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2018-08-09T18:39:17Z" title="10 ส.ค. 2561 01:39 GMT+7">8 months ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="directory" class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" role="img"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="examples" id="bfebe34154a0dfd9fc7b447fc9ed74e9-c2fd531ce7b852eea362cf5bcbef8d81b492fa99" href="https://github.com/axios/axios/tree/master/examples">examples</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Update links" class="link-gray" href="https://github.com/axios/axios/commit/26b06391f831ef98606ec0ed406d2be1742e9850">Update links</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2017-09-29T04:09:47Z" title="29 ก.ย. 2560 11:09 GMT+7">2 years ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="directory" class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" role="img"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="lib" id="e8acc63b1e238f3255c900eed37254b8-bb9e76ad49a989dc79e51b7906661634d710820c" href="https://github.com/axios/axios/tree/master/lib">lib</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Fixing building url with hash mark (#1771)

This commit fix building url with hash map (fragment identifier) when parameters are present: they must not be added after `#`, because client cut everything after `#`" class="link-gray" href="https://github.com/axios/axios/commit/81eaa3db4cf51bd911f98de5aa1ad130b3c55c8e">Fixing building url with hash mark (</a><a class="issue-link js-issue-link" data-error-text="Failed to load issue title" data-id="355962785" data-permission-text="Issue title is private" data-url="https://github.com/axios/axios/issues/1771" data-hovercard-type="pull_request" data-hovercard-url="/axios/axios/pull/1771/hovercard" href="https://github.com/axios/axios/pull/1771">#1771</a><a data-pjax="true" title="Fixing building url with hash mark (#1771)

This commit fix building url with hash map (fragment identifier) when parameters are present: they must not be added after `#`, because client cut everything after `#`" class="link-gray" href="https://github.com/axios/axios/commit/81eaa3db4cf51bd911f98de5aa1ad130b3c55c8e">)</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2018-09-04T07:53:57Z" title="4 ก.ย. 2561 14:53 GMT+7">7 months ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="directory" class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" role="img"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="sandbox" id="93bc63e0b4f48fbbff568d9fc0dc3def-484ae40ed3af73492d64e0a63ab81952e29b2c8f" href="https://github.com/axios/axios/tree/master/sandbox">sandbox</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Adding custom URL support in sandbox client" class="link-gray" href="https://github.com/axios/axios/commit/e3308899d3f5adc25eb29ef4fba9a7cd6ec4bb8d">Adding custom URL support in sandbox client</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2014-09-30T14:55:36Z" title="30 ก.ย. 2557 21:55 GMT+7">5 years ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="directory" class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" role="img"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="test" id="098f6bcd4621d373cade4e832627b4f6-fe4b61844893f147ea3fa0285a7ab76b4d2891de" href="https://github.com/axios/axios/tree/master/test">test</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Fixing building url with hash mark (#1771)

This commit fix building url with hash map (fragment identifier) when parameters are present: they must not be added after `#`, because client cut everything after `#`" class="link-gray" href="https://github.com/axios/axios/commit/81eaa3db4cf51bd911f98de5aa1ad130b3c55c8e">Fixing building url with hash mark (</a><a class="issue-link js-issue-link" data-error-text="Failed to load issue title" data-id="355962785" data-permission-text="Issue title is private" data-url="https://github.com/axios/axios/issues/1771" data-hovercard-type="pull_request" data-hovercard-url="/axios/axios/pull/1771/hovercard" href="https://github.com/axios/axios/pull/1771">#1771</a><a data-pjax="true" title="Fixing building url with hash mark (#1771)

This commit fix building url with hash map (fragment identifier) when parameters are present: they must not be added after `#`, because client cut everything after `#`" class="link-gray" href="https://github.com/axios/axios/commit/81eaa3db4cf51bd911f98de5aa1ad130b3c55c8e">)</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2018-09-04T07:53:57Z" title="4 ก.ย. 2561 14:53 GMT+7">7 months ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item" aria-selected="false">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title=".eslintrc.js" id="e4403a877d80de653400d88d85e4801a-7f9e73ed1c646a852cefb43e92121af6f8bf7a95" href="https://github.com/axios/axios/blob/master/.eslintrc.js">.eslintrc.js</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Fixing .eslintrc without extension (#1789)" class="link-gray" href="https://github.com/axios/axios/commit/81f0d28eb5f8f3ec606fe0e282d4fbaea109c868">Fixing .eslintrc without extension (</a><a class="issue-link js-issue-link" data-error-text="Failed to load issue title" data-id="359868589" data-permission-text="Issue title is private" data-url="https://github.com/axios/axios/issues/1789" data-hovercard-type="pull_request" data-hovercard-url="/axios/axios/pull/1789/hovercard" href="https://github.com/axios/axios/pull/1789">#1789</a><a data-pjax="true" title="Fixing .eslintrc without extension (#1789)" class="link-gray" href="https://github.com/axios/axios/commit/81f0d28eb5f8f3ec606fe0e282d4fbaea109c868">)</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2018-09-17T14:24:46Z" title="17 ก.ย. 2561 21:24 GMT+7">7 months ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title=".gitignore" id="a084b794bc0759e7a6b77810e01874f2-a003950731cf57f0387c1eff498a8d48166b5523" href="https://github.com/axios/axios/blob/master/.gitignore">.gitignore</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="chore: ignore package-lock.json" class="link-gray" href="https://github.com/axios/axios/commit/ecded5e58f1015f0f69b4aae76efc310f51ca496">chore: ignore package-lock.json</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2018-04-07T04:21:45Z" title="7 เม.ย. 2561 11:21 GMT+7">a year ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title=".npmignore" id="0fd4ef892d9d4990033701887c2f9bcc-09739a34f8a5d3112347e74fe4e771f8c236524d" href="https://github.com/axios/axios/blob/master/.npmignore">.npmignore</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Adding TypeScript definitions for interceptors" class="link-gray" href="https://github.com/axios/axios/commit/0664d9895a7d595599c2834b18d4e572f2686e26">Adding TypeScript definitions for interceptors</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2016-08-16T16:34:23Z" title="16 ส.ค. 2559 23:34 GMT+7">3 years ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title=".travis.yml" id="354f30a63fb0907d4ad57269548329e3-9d4506dfb029e2453368407bb68253cc8f0c8c27" href="https://github.com/axios/axios/blob/master/.travis.yml">.travis.yml</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Attempting to fix Travis build" class="link-gray" href="https://github.com/axios/axios/commit/8f304903863800f1efe9d4fd15f7611d1b0d4e15">Attempting to fix Travis build</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2016-09-23T23:26:42Z" title="24 ก.ย. 2559 06:26 GMT+7">3 years ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="CHANGELOG.md" id="4ac32a78649ca5bdd8e0ba38b7006a1e-08d045b5b8cb8873c6dbe3f5678932e2a47ea986" href="https://github.com/axios/axios/blob/master/CHANGELOG.md">CHANGELOG.md</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Update changelog for 0.19.0-beta.1 release" class="link-gray" href="https://github.com/axios/axios/commit/56ac637d7d2f2f08e7b80e892d68cee7ae7ae830">Update changelog for 0.19.0-beta.1 release</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2018-08-09T18:35:34Z" title="10 ส.ค. 2561 01:35 GMT+7">8 months ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="CODE_OF_CONDUCT.md" id="a1ee87dafebc22cbd96979f1b2b7e837-7f81ae4c089c911da401671097dba843556fba07" href="https://github.com/axios/axios/blob/master/CODE_OF_CONDUCT.md">CODE_OF_CONDUCT.md</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Adding code of conduct and collaborator guide" class="link-gray" href="https://github.com/axios/axios/commit/6d3d266616e9003b0367302ed372e9b486582f26">Adding code of conduct and collaborator guide</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2016-03-02T20:41:14Z" title="3 มี.ค. 2559 03:41 GMT+7">3 years ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="COLLABORATOR_GUIDE.md" id="24ec76918d4b93bf79ab928e23b75523-2bc7cb6fdc8b04864afc8d8b0053b367f9d9253a" href="https://github.com/axios/axios/blob/master/COLLABORATOR_GUIDE.md">COLLABORATOR_GUIDE.md</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Update links" class="link-gray" href="https://github.com/axios/axios/commit/26b06391f831ef98606ec0ed406d2be1742e9850">Update links</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2017-09-29T04:09:47Z" title="29 ก.ย. 2560 11:09 GMT+7">2 years ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item" aria-selected="false">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="CONTRIBUTING.md" id="6a3371457528722a734f3c51d9238c13-3008768f5acbb34c017b16b6fcde8700e1b981fb" href="https://github.com/axios/axios/blob/master/CONTRIBUTING.md">CONTRIBUTING.md</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="test: use mocha instead of nodeunit (#1655)" class="link-gray" href="https://github.com/axios/axios/commit/98080381fa78dcffa91a15e6d25617583d13e533">test: use mocha instead of nodeunit (</a><a class="issue-link js-issue-link" data-error-text="Failed to load issue title" data-id="338811418" data-permission-text="Issue title is private" data-url="https://github.com/axios/axios/issues/1655" data-hovercard-type="pull_request" data-hovercard-url="/axios/axios/pull/1655/hovercard" href="https://github.com/axios/axios/pull/1655">#1655</a><a data-pjax="true" title="test: use mocha instead of nodeunit (#1655)" class="link-gray" href="https://github.com/axios/axios/commit/98080381fa78dcffa91a15e6d25617583d13e533">)</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2018-07-06T05:41:13Z" title="6 ก.ค. 2561 12:41 GMT+7">9 months ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="COOKBOOK.md" id="5bd47722ffae626778b41a17d3ddf98b-3e719b4f57db8166c9d49b51fe04d3e08a2ad1af" href="https://github.com/axios/axios/blob/master/COOKBOOK.md">COOKBOOK.md</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="docs: es6ify the docs a little (#1461)" class="link-gray" href="https://github.com/axios/axios/commit/8e3b50c56418b9070e22bc59fc9346ae4a7726c9">docs: es6ify the docs a little (</a><a class="issue-link js-issue-link" data-error-text="Failed to load issue title" data-id="312171326" data-permission-text="Issue title is private" data-url="https://github.com/axios/axios/issues/1461" data-hovercard-type="pull_request" data-hovercard-url="/axios/axios/pull/1461/hovercard" href="https://github.com/axios/axios/pull/1461">#1461</a><a data-pjax="true" title="docs: es6ify the docs a little (#1461)" class="link-gray" href="https://github.com/axios/axios/commit/8e3b50c56418b9070e22bc59fc9346ae4a7726c9">)</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2018-04-08T07:18:56Z" title="8 เม.ย. 2561 14:18 GMT+7">a year ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="ECOSYSTEM.md" id="e858aa570cbd3e493ff04306c9df89dc-6d705a2e8a4653df549cc74b7de5a2019a8b157c" href="https://github.com/axios/axios/blob/master/ECOSYSTEM.md">ECOSYSTEM.md</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="docs(ECOSYSTEM): add axios-api-versioning (#2020)" class="link-gray" href="https://github.com/axios/axios/commit/283d7b306ce231f092d28e01713905e5c1600d14">docs(ECOSYSTEM): add axios-api-versioning (</a><a class="issue-link js-issue-link" data-error-text="Failed to load issue title" data-id="415387328" data-permission-text="Issue title is private" data-url="https://github.com/axios/axios/issues/2020" data-hovercard-type="pull_request" data-hovercard-url="/axios/axios/pull/2020/hovercard" href="https://github.com/axios/axios/pull/2020">#2020</a><a data-pjax="true" title="docs(ECOSYSTEM): add axios-api-versioning (#2020)" class="link-gray" href="https://github.com/axios/axios/commit/283d7b306ce231f092d28e01713905e5c1600d14">)</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2019-03-04T19:16:10Z" title="5 มี.ค. 2562 02:16 GMT+7">27 days ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item" aria-selected="false">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="Gruntfile.js" id="35b4a816e0441e6a375cd925af50752c-3f527456e8e89b013bbe020da7fcd9767eb76bd2" href="https://github.com/axios/axios/blob/master/Gruntfile.js">Gruntfile.js</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="test: use mocha instead of nodeunit (#1655)" class="link-gray" href="https://github.com/axios/axios/commit/98080381fa78dcffa91a15e6d25617583d13e533">test: use mocha instead of nodeunit (</a><a class="issue-link js-issue-link" data-error-text="Failed to load issue title" data-id="338811418" data-permission-text="Issue title is private" data-url="https://github.com/axios/axios/issues/1655" data-hovercard-type="pull_request" data-hovercard-url="/axios/axios/pull/1655/hovercard" href="https://github.com/axios/axios/pull/1655">#1655</a><a data-pjax="true" title="test: use mocha instead of nodeunit (#1655)" class="link-gray" href="https://github.com/axios/axios/commit/98080381fa78dcffa91a15e6d25617583d13e533">)</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2018-07-06T05:41:13Z" title="6 ก.ค. 2561 12:41 GMT+7">9 months ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="LICENSE" id="9879d6db96fd29134fc802214163b95a-d36c80ef27bf3e7bcb57ce60167ec4b5646a223a" itemprop="license" href="https://github.com/axios/axios/blob/master/LICENSE">LICENSE</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Update license date" class="link-gray" href="https://github.com/axios/axios/commit/145b63e8e694bd2fc81db62c6e8f680d41d25615">Update license date</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2017-12-31T23:57:34Z" title="1 ม.ค. 2561 06:57 GMT+7">a year ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item navigation-focus" aria-selected="true">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="README.md" id="04c6e90faac2675aa89e2176d2eec7d8-1aab5f34cd2127ba43b6c28a0d3b2738804c66a5" href="https://github.com/axios/axios/blob/master/README.md">README.md</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Update README.md. - Add Querystring library note (#1896)

* Update README.md. Querystring libraries note

* Typo in README.md

Co-Authored-By: airs0urce &lt;airs0urce0@gmail.com&gt;

* Update README.md

Co-Authored-By: airs0urce &lt;airs0urce0@gmail.com&gt;" class="link-gray" href="https://github.com/axios/axios/commit/71032ab5bd6ccadad04aeed286d2816ca2e84b43">Update README.md. - Add Querystring library note (</a><a class="issue-link js-issue-link" data-error-text="Failed to load issue title" data-id="384726820" data-permission-text="Issue title is private" data-url="https://github.com/axios/axios/issues/1896" data-hovercard-type="pull_request" data-hovercard-url="/axios/axios/pull/1896/hovercard" href="https://github.com/axios/axios/pull/1896">#1896</a><a data-pjax="true" title="Update README.md. - Add Querystring library note (#1896)

* Update README.md. Querystring libraries note

* Typo in README.md

Co-Authored-By: airs0urce &lt;airs0urce0@gmail.com&gt;

* Update README.md

Co-Authored-By: airs0urce &lt;airs0urce0@gmail.com&gt;" class="link-gray" href="https://github.com/axios/axios/commit/71032ab5bd6ccadad04aeed286d2816ca2e84b43">)</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2019-02-04T04:16:37Z" title="4 ก.พ. 2562 11:16 GMT+7">2 months ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="UPGRADE_GUIDE.md" id="a2711704acbc09c82bee779cbfbc0982-eedb049255a7559cb3e8b2cce7e6242fe1586694" href="https://github.com/axios/axios/blob/master/UPGRADE_GUIDE.md">UPGRADE_GUIDE.md</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Update links" class="link-gray" href="https://github.com/axios/axios/commit/26b06391f831ef98606ec0ed406d2be1742e9850">Update links</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2017-09-29T04:09:47Z" title="29 ก.ย. 2560 11:09 GMT+7">2 years ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="bower.json" id="0a08a7565aba4405282251491979bb6b-650a81e20a4504a5d3b4cecde0a7741cdaa12eb1" href="https://github.com/axios/axios/blob/master/bower.json">bower.json</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Releasing 0.19.0-beta.1" class="link-gray" href="https://github.com/axios/axios/commit/527381198e8112dd298918b3d9d6c643763a59c3">Releasing 0.19.0-beta.1</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2018-08-09T18:39:17Z" title="10 ส.ค. 2561 01:39 GMT+7">8 months ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="index.d.ts" id="b52768974e6bc0faccb7d4b75b162c99-0d4d6cc0adca396797c4b91a02ec59bbb4ee0b13" href="https://github.com/axios/axios/blob/master/index.d.ts">index.d.ts</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Allow uppercase methods in typings. (#1781)" class="link-gray" href="https://github.com/axios/axios/commit/75c8b3f146aaa8a71f7dca0263686fb1799f8f31">Allow uppercase methods in typings. (</a><a class="issue-link js-issue-link" data-error-text="Failed to load issue title" data-id="358060941" data-permission-text="Issue title is private" data-url="https://github.com/axios/axios/issues/1781" data-hovercard-type="pull_request" data-hovercard-url="/axios/axios/pull/1781/hovercard" href="https://github.com/axios/axios/pull/1781">#1781</a><a data-pjax="true" title="Allow uppercase methods in typings. (#1781)" class="link-gray" href="https://github.com/axios/axios/commit/75c8b3f146aaa8a71f7dca0263686fb1799f8f31">)</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2018-09-17T16:25:07Z" title="17 ก.ย. 2561 23:25 GMT+7">7 months ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="index.js" id="168726dbe96b3ce427e7fedce31bb0bc-79dfd09dd5711f63442c6b0e8a534da5de68b442" href="https://github.com/axios/axios/blob/master/index.js">index.js</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Adding initial source" class="link-gray" href="https://github.com/axios/axios/commit/9c2528d9cca7c7be0b0e5c6cc58f2ad13a1d5689">Adding initial source</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2014-08-18T23:27:33Z" title="19 ส.ค. 2557 06:27 GMT+7">5 years ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="karma.conf.js" id="a2a3b7b0c9c3b4b93b4aebf4e3ec3cfb-5525421d0d32ae0eeb25f256df90fd823e6c61dd" href="https://github.com/axios/axios/blob/master/karma.conf.js">karma.conf.js</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Fix failing SauceLabs tests by updating configuration

- Remove code coverage from SauceLabs CI, as it causes tests to hang.
- Update Safari browser tests to handle Safari 9-11 with proper OS
settings" class="link-gray" href="https://github.com/axios/axios/commit/c0b40650d1c61d1e61c7853de806deeb3cb8ad12">Fix failing SauceLabs tests by updating configuration</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2018-08-10T18:36:53Z" title="11 ส.ค. 2561 01:36 GMT+7">8 months ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="package.json" id="b9cfc7f2cdf78a7f4b91a753d10865a2-1289bb0a105e3693bd2f81578eee38c843d71d1b" href="https://github.com/axios/axios/blob/master/package.json">package.json</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Fixing Mocha tests by locking follow-redirects version to 1.5.10 (#1993)" class="link-gray" href="https://github.com/axios/axios/commit/2eeb59af4de41e07c7dd1eec09af0230960c029c">Fixing Mocha tests by locking follow-redirects version to 1.5.10 (</a><a class="issue-link js-issue-link" data-error-text="Failed to load issue title" data-id="408376621" data-permission-text="Issue title is private" data-url="https://github.com/axios/axios/issues/1993" data-hovercard-type="pull_request" data-hovercard-url="/axios/axios/pull/1993/hovercard" href="https://github.com/axios/axios/pull/1993">#1993</a><a data-pjax="true" title="Fixing Mocha tests by locking follow-redirects version to 1.5.10 (#1993)" class="link-gray" href="https://github.com/axios/axios/commit/2eeb59af4de41e07c7dd1eec09af0230960c029c">)</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2019-02-09T04:27:36Z" title="9 ก.พ. 2562 11:27 GMT+7">2 months ago</time-ago></span>
          </td>
        </tr>
        <tr class="js-navigation-item">
          <td class="icon">
            <svg aria-label="file" class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
            <img class="spinner" alt="" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/octocat-spinner-32.gif" width="16" height="16">
          </td>
          <td class="content">
            <span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="webpack.config.js" id="11e9f7f953edc64ba14b0cc350ae7b9d-1a3e5b53175283f2ac36a29972de9005d272f54d" href="https://github.com/axios/axios/blob/master/webpack.config.js">webpack.config.js</a></span>
          </td>
          <td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="Fixing UMD build" class="link-gray" href="https://github.com/axios/axios/commit/81e566b905a7da462532be1bdf81b076e33be30e">Fixing UMD build</a>
            </span>
          </td>
          <td class="age">
            <span class="css-truncate css-truncate-target"><time-ago datetime="2016-10-15T06:24:59Z" title="15 ต.ค. 2559 13:24 GMT+7">3 years ago</time-ago></span>
          </td>
        </tr>
    </tbody>
  </table>

</div>



  <div id="readme" class="Box Box--condensed instapaper_body md js-code-block-container">
    <div class="Box-header d-flex flex-items-center flex-justify-between px-2">
      <h3 class="Box-title pr-3">
        <svg class="octicon octicon-book" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M3 5h4v1H3V5zm0 3h4V7H3v1zm0 2h4V9H3v1zm11-5h-4v1h4V5zm0 2h-4v1h4V7zm0 2h-4v1h4V9zm2-6v9c0 .55-.45 1-1 1H9.5l-1 1-1-1H2c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1h5.5l1 1 1-1H15c.55 0 1 .45 1 1zm-8 .5L7.5 3H2v9h6V3.5zm7-.5H9.5l-.5.5V12h6V3z"></path></svg>
        README.md
      </h3>
    </div>
      <div class="Box-body">
        <article class="markdown-body entry-content p-5" itemprop="text"><h1><a id="user-content-axios" class="anchor" aria-hidden="true" href="#axios"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios</h1>
<p><a href="https://www.npmjs.org/package/axios" rel="nofollow"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f696d672e736869656c64732e696f2f6e706d2f762f61.svg" alt="npm version" data-canonical-src="https://img.shields.io/npm/v/axios.svg?style=flat-square" style="max-width:100%;"></a>
<a href="https://travis-ci.org/axios/axios" rel="nofollow"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f696d672e736869656c64732e696f2f7472617669732f.svg" alt="build status" data-canonical-src="https://img.shields.io/travis/axios/axios.svg?style=flat-square" style="max-width:100%;"></a>
<a href="https://coveralls.io/r/mzabriskie/axios" rel="nofollow"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f696d672e736869656c64732e696f2f636f766572616c.svg" alt="code coverage" data-canonical-src="https://img.shields.io/coveralls/mzabriskie/axios.svg?style=flat-square" style="max-width:100%;"></a>
<a href="https://packagephobia.now.sh/result?p=axios" rel="nofollow"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f7061636b61676570686f6269612e6e6f772e73682f62.svg" alt="install size" data-canonical-src="https://packagephobia.now.sh/badge?p=axios" style="max-width:100%;"></a>
<a href="http://npm-stat.com/charts.html?package=axios" rel="nofollow"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f696d672e736869656c64732e696f2f6e706d2f646d2f.svg" alt="npm downloads" data-canonical-src="https://img.shields.io/npm/dm/axios.svg?style=flat-square" style="max-width:100%;"></a>
<a href="https://gitter.im/mzabriskie/axios" rel="nofollow"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f696d672e736869656c64732e696f2f6769747465722f.svg" alt="gitter chat" data-canonical-src="https://img.shields.io/gitter/room/mzabriskie/axios.svg?style=flat-square" style="max-width:100%;"></a>
<a href="https://www.codetriage.com/axios/axios" rel="nofollow"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f7777772e636f64657472696167652e636f6d2f617869.svg" alt="code helpers" data-canonical-src="https://www.codetriage.com/axios/axios/badges/users.svg" style="max-width:100%;"></a></p>
<p>Promise based HTTP client for the browser and node.js</p>
<h2><a id="user-content-features" class="anchor" aria-hidden="true" href="#features"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Features</h2>
<ul>
<li>Make <a href="https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest" rel="nofollow">XMLHttpRequests</a> from the browser</li>
<li>Make <a href="http://nodejs.org/api/http.html" rel="nofollow">http</a> requests from node.js</li>
<li>Supports the <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise" rel="nofollow">Promise</a> API</li>
<li>Intercept request and response</li>
<li>Transform request and response data</li>
<li>Cancel requests</li>
<li>Automatic transforms for JSON data</li>
<li>Client side support for protecting against <a href="http://en.wikipedia.org/wiki/Cross-site_request_forgery" rel="nofollow">XSRF</a></li>
</ul>
<h2><a id="user-content-browser-support" class="anchor" aria-hidden="true" href="#browser-support"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Browser Support</h2>
<table>
<thead>
<tr>
<th><a target="_blank" rel="noopener noreferrer" href="https://camo.githubusercontent.com/26846e979600799e9f4273d38bd9e5cb7bb8d6d0/68747470733a2f2f7261772e6769746875622e636f6d2f616c7272612f62726f777365722d6c6f676f732f6d61737465722f7372632f6368726f6d652f6368726f6d655f34387834382e706e67"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f7261772e6769746875622e636f6d2f616c727261_006.png" alt="Chrome" data-canonical-src="https://raw.github.com/alrra/browser-logos/master/src/chrome/chrome_48x48.png" style="max-width:100%;"></a></th>
<th><a target="_blank" rel="noopener noreferrer" href="https://camo.githubusercontent.com/6087557f69ec6585eb7f8d7bd7d9ecb6b7f51ba1/68747470733a2f2f7261772e6769746875622e636f6d2f616c7272612f62726f777365722d6c6f676f732f6d61737465722f7372632f66697265666f782f66697265666f785f34387834382e706e67"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f7261772e6769746875622e636f6d2f616c727261_005.png" alt="Firefox" data-canonical-src="https://raw.github.com/alrra/browser-logos/master/src/firefox/firefox_48x48.png" style="max-width:100%;"></a></th>
<th><a target="_blank" rel="noopener noreferrer" href="https://camo.githubusercontent.com/6fbaeb334b99e74ddd89190a42766ea3b4600d2c/68747470733a2f2f7261772e6769746875622e636f6d2f616c7272612f62726f777365722d6c6f676f732f6d61737465722f7372632f7361666172692f7361666172695f34387834382e706e67"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f7261772e6769746875622e636f6d2f616c727261_003.png" alt="Safari" data-canonical-src="https://raw.github.com/alrra/browser-logos/master/src/safari/safari_48x48.png" style="max-width:100%;"></a></th>
<th><a target="_blank" rel="noopener noreferrer" href="https://camo.githubusercontent.com/96d2405a936da1fb8988db0c1d304d3db04b8a52/68747470733a2f2f7261772e6769746875622e636f6d2f616c7272612f62726f777365722d6c6f676f732f6d61737465722f7372632f6f706572612f6f706572615f34387834382e706e67"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f7261772e6769746875622e636f6d2f616c727261_002.png" alt="Opera" data-canonical-src="https://raw.github.com/alrra/browser-logos/master/src/opera/opera_48x48.png" style="max-width:100%;"></a></th>
<th><a target="_blank" rel="noopener noreferrer" href="https://camo.githubusercontent.com/826b3030243b09465bf14cf420704344f5eee991/68747470733a2f2f7261772e6769746875622e636f6d2f616c7272612f62726f777365722d6c6f676f732f6d61737465722f7372632f656467652f656467655f34387834382e706e67"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f7261772e6769746875622e636f6d2f616c7272612f62.png" alt="Edge" data-canonical-src="https://raw.github.com/alrra/browser-logos/master/src/edge/edge_48x48.png" style="max-width:100%;"></a></th>
<th><a target="_blank" rel="noopener noreferrer" href="https://camo.githubusercontent.com/4b062fb12353b0ef8420a72ddc3debf6b2ee5747/68747470733a2f2f7261772e6769746875622e636f6d2f616c7272612f62726f777365722d6c6f676f732f6d61737465722f7372632f617263686976652f696e7465726e65742d6578706c6f7265725f392d31312f696e7465726e65742d6578706c6f7265725f392d31315f34387834382e706e67"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f7261772e6769746875622e636f6d2f616c727261_004.png" alt="IE" data-canonical-src="https://raw.github.com/alrra/browser-logos/master/src/archive/internet-explorer_9-11/internet-explorer_9-11_48x48.png" style="max-width:100%;"></a></th>
</tr>
</thead>
<tbody>
<tr>
<td>Latest ✔</td>
<td>Latest ✔</td>
<td>Latest ✔</td>
<td>Latest ✔</td>
<td>Latest ✔</td>
<td>11 ✔</td>
</tr>
</tbody>
</table>
<p><a href="https://saucelabs.com/u/axios" rel="nofollow"><img src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/68747470733a2f2f73617563656c6162732e636f6d2f6f70656e5f736175.svg" alt="Browser Matrix" data-canonical-src="https://saucelabs.com/open_sauce/build_matrix/axios.svg" style="max-width:100%;"></a></p>
<h2><a id="user-content-installing" class="anchor" aria-hidden="true" href="#installing"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Installing</h2>
<p>Using npm:</p>
<div class="highlight highlight-source-shell"><pre>$ npm install axios</pre></div>
<p>Using bower:</p>
<div class="highlight highlight-source-shell"><pre>$ bower install axios</pre></div>
<p>Using cdn:</p>
<div class="highlight highlight-text-html-basic"><pre>&lt;<span class="pl-ent">script</span> <span class="pl-e">src</span>=<span class="pl-s"><span class="pl-pds">"</span>https://unpkg.com/axios/dist/axios.min.js<span class="pl-pds">"</span></span>&gt;&lt;/<span class="pl-ent">script</span>&gt;</pre></div>
<h2><a id="user-content-example" class="anchor" aria-hidden="true" href="#example"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Example</h2>
<p>Performing a <code>GET</code> request</p>
<div class="highlight highlight-source-js"><pre><span class="pl-k">const</span> <span class="pl-c1">axios</span> <span class="pl-k">=</span> <span class="pl-c1">require</span>(<span class="pl-s"><span class="pl-pds">'</span>axios<span class="pl-pds">'</span></span>);

<span class="pl-c"><span class="pl-c">//</span> Make a request for a user with a given ID</span>
<span class="pl-smi">axios</span>.<span class="pl-c1">get</span>(<span class="pl-s"><span class="pl-pds">'</span>/user?ID=12345<span class="pl-pds">'</span></span>)
  .<span class="pl-c1">then</span>(<span class="pl-k">function</span> (<span class="pl-smi">response</span>) {
    <span class="pl-c"><span class="pl-c">//</span> handle success</span>
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(response);
  })
  .<span class="pl-c1">catch</span>(<span class="pl-k">function</span> (<span class="pl-smi">error</span>) {
    <span class="pl-c"><span class="pl-c">//</span> handle error</span>
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(error);
  })
  .<span class="pl-c1">then</span>(<span class="pl-k">function</span> () {
    <span class="pl-c"><span class="pl-c">//</span> always executed</span>
  });

<span class="pl-c"><span class="pl-c">//</span> Optionally the request above could also be done as</span>
<span class="pl-smi">axios</span>.<span class="pl-c1">get</span>(<span class="pl-s"><span class="pl-pds">'</span>/user<span class="pl-pds">'</span></span>, {
    params<span class="pl-k">:</span> {
      <span class="pl-c1">ID</span><span class="pl-k">:</span> <span class="pl-c1">12345</span>
    }
  })
  .<span class="pl-c1">then</span>(<span class="pl-k">function</span> (<span class="pl-smi">response</span>) {
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(response);
  })
  .<span class="pl-c1">catch</span>(<span class="pl-k">function</span> (<span class="pl-smi">error</span>) {
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(error);
  })
  .<span class="pl-c1">then</span>(<span class="pl-k">function</span> () {
    <span class="pl-c"><span class="pl-c">//</span> always executed</span>
  });  

<span class="pl-c"><span class="pl-c">//</span> Want to use async/await? Add the `async` keyword to your outer function/method.</span>
<span class="pl-k">async</span> <span class="pl-k">function</span> <span class="pl-en">getUser</span>() {
  <span class="pl-k">try</span> {
    <span class="pl-k">const</span> <span class="pl-c1">response</span> <span class="pl-k">=</span> <span class="pl-k">await</span> <span class="pl-smi">axios</span>.<span class="pl-c1">get</span>(<span class="pl-s"><span class="pl-pds">'</span>/user?ID=12345<span class="pl-pds">'</span></span>);
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(response);
  } <span class="pl-k">catch</span> (error) {
    <span class="pl-en">console</span>.<span class="pl-c1">error</span>(error);
  }
}</pre></div>
<blockquote>
<p><strong>NOTE:</strong> <code>async/await</code> is part of ECMAScript 2017 and is not supported in Internet
Explorer and older browsers, so use with caution.</p>
</blockquote>
<p>Performing a <code>POST</code> request</p>
<div class="highlight highlight-source-js"><pre><span class="pl-smi">axios</span>.<span class="pl-en">post</span>(<span class="pl-s"><span class="pl-pds">'</span>/user<span class="pl-pds">'</span></span>, {
    firstName<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>Fred<span class="pl-pds">'</span></span>,
    lastName<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>Flintstone<span class="pl-pds">'</span></span>
  })
  .<span class="pl-c1">then</span>(<span class="pl-k">function</span> (<span class="pl-smi">response</span>) {
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(response);
  })
  .<span class="pl-c1">catch</span>(<span class="pl-k">function</span> (<span class="pl-smi">error</span>) {
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(error);
  });</pre></div>
<p>Performing multiple concurrent requests</p>
<div class="highlight highlight-source-js"><pre><span class="pl-k">function</span> <span class="pl-en">getUserAccount</span>() {
  <span class="pl-k">return</span> <span class="pl-smi">axios</span>.<span class="pl-c1">get</span>(<span class="pl-s"><span class="pl-pds">'</span>/user/12345<span class="pl-pds">'</span></span>);
}

<span class="pl-k">function</span> <span class="pl-en">getUserPermissions</span>() {
  <span class="pl-k">return</span> <span class="pl-smi">axios</span>.<span class="pl-c1">get</span>(<span class="pl-s"><span class="pl-pds">'</span>/user/12345/permissions<span class="pl-pds">'</span></span>);
}

<span class="pl-smi">axios</span>.<span class="pl-c1">all</span>([<span class="pl-en">getUserAccount</span>(), <span class="pl-en">getUserPermissions</span>()])
  .<span class="pl-c1">then</span>(<span class="pl-smi">axios</span>.<span class="pl-en">spread</span>(<span class="pl-k">function</span> (<span class="pl-smi">acct</span>, <span class="pl-smi">perms</span>) {
    <span class="pl-c"><span class="pl-c">//</span> Both requests are now complete</span>
  }));</pre></div>
<h2><a id="user-content-axios-api" class="anchor" aria-hidden="true" href="#axios-api"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios API</h2>
<p>Requests can be made by passing the relevant config to <code>axios</code>.</p>
<h5><a id="user-content-axiosconfig" class="anchor" aria-hidden="true" href="#axiosconfig"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios(config)</h5>
<div class="highlight highlight-source-js"><pre><span class="pl-c"><span class="pl-c">//</span> Send a POST request</span>
<span class="pl-en">axios</span>({
  method<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>post<span class="pl-pds">'</span></span>,
  url<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>/user/12345<span class="pl-pds">'</span></span>,
  data<span class="pl-k">:</span> {
    firstName<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>Fred<span class="pl-pds">'</span></span>,
    lastName<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>Flintstone<span class="pl-pds">'</span></span>
  }
});</pre></div>
<div class="highlight highlight-source-js"><pre><span class="pl-c"><span class="pl-c">//</span> GET request for remote image</span>
<span class="pl-en">axios</span>({
  method<span class="pl-k">:</span><span class="pl-s"><span class="pl-pds">'</span>get<span class="pl-pds">'</span></span>,
  url<span class="pl-k">:</span><span class="pl-s"><span class="pl-pds">'</span>http://bit.ly/2mTM3nY<span class="pl-pds">'</span></span>,
  responseType<span class="pl-k">:</span><span class="pl-s"><span class="pl-pds">'</span>stream<span class="pl-pds">'</span></span>
})
  .<span class="pl-c1">then</span>(<span class="pl-k">function</span> (<span class="pl-smi">response</span>) {
    <span class="pl-smi">response</span>.<span class="pl-c1">data</span>.<span class="pl-en">pipe</span>(<span class="pl-smi">fs</span>.<span class="pl-en">createWriteStream</span>(<span class="pl-s"><span class="pl-pds">'</span>ada_lovelace.jpg<span class="pl-pds">'</span></span>))
  });</pre></div>
<h5><a id="user-content-axiosurl-config" class="anchor" aria-hidden="true" href="#axiosurl-config"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios(url[, config])</h5>
<div class="highlight highlight-source-js"><pre><span class="pl-c"><span class="pl-c">//</span> Send a GET request (default method)</span>
<span class="pl-en">axios</span>(<span class="pl-s"><span class="pl-pds">'</span>/user/12345<span class="pl-pds">'</span></span>);</pre></div>
<h3><a id="user-content-request-method-aliases" class="anchor" aria-hidden="true" href="#request-method-aliases"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Request method aliases</h3>
<p>For convenience aliases have been provided for all supported request methods.</p>
<h5><a id="user-content-axiosrequestconfig" class="anchor" aria-hidden="true" href="#axiosrequestconfig"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios.request(config)</h5>
<h5><a id="user-content-axiosgeturl-config" class="anchor" aria-hidden="true" href="#axiosgeturl-config"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios.get(url[, config])</h5>
<h5><a id="user-content-axiosdeleteurl-config" class="anchor" aria-hidden="true" href="#axiosdeleteurl-config"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios.delete(url[, config])</h5>
<h5><a id="user-content-axiosheadurl-config" class="anchor" aria-hidden="true" href="#axiosheadurl-config"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios.head(url[, config])</h5>
<h5><a id="user-content-axiosoptionsurl-config" class="anchor" aria-hidden="true" href="#axiosoptionsurl-config"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios.options(url[, config])</h5>
<h5><a id="user-content-axiosposturl-data-config" class="anchor" aria-hidden="true" href="#axiosposturl-data-config"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios.post(url[, data[, config]])</h5>
<h5><a id="user-content-axiosputurl-data-config" class="anchor" aria-hidden="true" href="#axiosputurl-data-config"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios.put(url[, data[, config]])</h5>
<h5><a id="user-content-axiospatchurl-data-config" class="anchor" aria-hidden="true" href="#axiospatchurl-data-config"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios.patch(url[, data[, config]])</h5>
<h6><a id="user-content-note" class="anchor" aria-hidden="true" href="#note"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>NOTE</h6>
<p>When using the alias methods <code>url</code>, <code>method</code>, and <code>data</code> properties don't need to be specified in config.</p>
<h3><a id="user-content-concurrency" class="anchor" aria-hidden="true" href="#concurrency"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Concurrency</h3>
<p>Helper functions for dealing with concurrent requests.</p>
<h5><a id="user-content-axiosalliterable" class="anchor" aria-hidden="true" href="#axiosalliterable"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios.all(iterable)</h5>
<h5><a id="user-content-axiosspreadcallback" class="anchor" aria-hidden="true" href="#axiosspreadcallback"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios.spread(callback)</h5>
<h3><a id="user-content-creating-an-instance" class="anchor" aria-hidden="true" href="#creating-an-instance"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Creating an instance</h3>
<p>You can create a new instance of axios with a custom config.</p>
<h5><a id="user-content-axioscreateconfig" class="anchor" aria-hidden="true" href="#axioscreateconfig"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios.create([config])</h5>
<div class="highlight highlight-source-js"><pre><span class="pl-k">const</span> <span class="pl-c1">instance</span> <span class="pl-k">=</span> <span class="pl-smi">axios</span>.<span class="pl-en">create</span>({
  baseURL<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>https://some-domain.com/api/<span class="pl-pds">'</span></span>,
  timeout<span class="pl-k">:</span> <span class="pl-c1">1000</span>,
  headers<span class="pl-k">:</span> {<span class="pl-s"><span class="pl-pds">'</span>X-Custom-Header<span class="pl-pds">'</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>foobar<span class="pl-pds">'</span></span>}
});</pre></div>
<h3><a id="user-content-instance-methods" class="anchor" aria-hidden="true" href="#instance-methods"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Instance methods</h3>
<p>The available instance methods are listed below. The specified config will be merged with the instance config.</p>
<h5><a id="user-content-axiosrequestconfig-1" class="anchor" aria-hidden="true" href="#axiosrequestconfig-1"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios#request(config)</h5>
<h5><a id="user-content-axiosgeturl-config-1" class="anchor" aria-hidden="true" href="#axiosgeturl-config-1"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios#get(url[, config])</h5>
<h5><a id="user-content-axiosdeleteurl-config-1" class="anchor" aria-hidden="true" href="#axiosdeleteurl-config-1"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios#delete(url[, config])</h5>
<h5><a id="user-content-axiosheadurl-config-1" class="anchor" aria-hidden="true" href="#axiosheadurl-config-1"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios#head(url[, config])</h5>
<h5><a id="user-content-axiosoptionsurl-config-1" class="anchor" aria-hidden="true" href="#axiosoptionsurl-config-1"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios#options(url[, config])</h5>
<h5><a id="user-content-axiosposturl-data-config-1" class="anchor" aria-hidden="true" href="#axiosposturl-data-config-1"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios#post(url[, data[, config]])</h5>
<h5><a id="user-content-axiosputurl-data-config-1" class="anchor" aria-hidden="true" href="#axiosputurl-data-config-1"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios#put(url[, data[, config]])</h5>
<h5><a id="user-content-axiospatchurl-data-config-1" class="anchor" aria-hidden="true" href="#axiospatchurl-data-config-1"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios#patch(url[, data[, config]])</h5>
<h5><a id="user-content-axiosgeturiconfig" class="anchor" aria-hidden="true" href="#axiosgeturiconfig"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>axios#getUri([config])</h5>
<h2><a id="user-content-request-config" class="anchor" aria-hidden="true" href="#request-config"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Request Config</h2>
<p>These are the available config options for making requests. Only the <code>url</code> is required. Requests will default to <code>GET</code> if <code>method</code> is not specified.</p>
<div class="highlight highlight-source-js"><pre>{
  <span class="pl-c"><span class="pl-c">//</span> `url` is the server URL that will be used for the request</span>
  url<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>/user<span class="pl-pds">'</span></span>,

  <span class="pl-c"><span class="pl-c">//</span> `method` is the request method to be used when making the request</span>
  method<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>get<span class="pl-pds">'</span></span>, <span class="pl-c"><span class="pl-c">//</span> default</span>

  <span class="pl-c"><span class="pl-c">//</span> `baseURL` will be prepended to `url` unless `url` is absolute.</span>
  <span class="pl-c"><span class="pl-c">//</span> It can be convenient to set `baseURL` for an instance of axios to pass relative URLs</span>
  <span class="pl-c"><span class="pl-c">//</span> to methods of that instance.</span>
  baseURL<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>https://some-domain.com/api/<span class="pl-pds">'</span></span>,

  <span class="pl-c"><span class="pl-c">//</span> `transformRequest` allows changes to the request data before it is sent to the server</span>
  <span class="pl-c"><span class="pl-c">//</span> This is only applicable for request methods 'PUT', 'POST', and 'PATCH'</span>
  <span class="pl-c"><span class="pl-c">//</span> The last function in the array must return a string or an instance of Buffer, ArrayBuffer,</span>
  <span class="pl-c"><span class="pl-c">//</span> FormData or Stream</span>
  <span class="pl-c"><span class="pl-c">//</span> You may modify the headers object.</span>
  transformRequest<span class="pl-k">:</span> [<span class="pl-k">function</span> (<span class="pl-smi">data</span>, <span class="pl-smi">headers</span>) {
    <span class="pl-c"><span class="pl-c">//</span> Do whatever you want to transform the data</span>

    <span class="pl-k">return</span> data;
  }],

  <span class="pl-c"><span class="pl-c">//</span> `transformResponse` allows changes to the response data to be made before</span>
  <span class="pl-c"><span class="pl-c">//</span> it is passed to then/catch</span>
  transformResponse<span class="pl-k">:</span> [<span class="pl-k">function</span> (<span class="pl-smi">data</span>) {
    <span class="pl-c"><span class="pl-c">//</span> Do whatever you want to transform the data</span>

    <span class="pl-k">return</span> data;
  }],

  <span class="pl-c"><span class="pl-c">//</span> `headers` are custom headers to be sent</span>
  headers<span class="pl-k">:</span> {<span class="pl-s"><span class="pl-pds">'</span>X-Requested-With<span class="pl-pds">'</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>XMLHttpRequest<span class="pl-pds">'</span></span>},

  <span class="pl-c"><span class="pl-c">//</span> `params` are the URL parameters to be sent with the request</span>
  <span class="pl-c"><span class="pl-c">//</span> Must be a plain object or a URLSearchParams object</span>
  params<span class="pl-k">:</span> {
    <span class="pl-c1">ID</span><span class="pl-k">:</span> <span class="pl-c1">12345</span>
  },

  <span class="pl-c"><span class="pl-c">//</span> `paramsSerializer` is an optional function in charge of serializing `params`</span>
  <span class="pl-c"><span class="pl-c">//</span> (e.g. https://www.npmjs.com/package/qs, http://api.jquery.com/jquery.param/)</span>
  <span class="pl-en">paramsSerializer</span><span class="pl-k">:</span> <span class="pl-k">function</span> (<span class="pl-smi">params</span>) {
    <span class="pl-k">return</span> <span class="pl-smi">Qs</span>.<span class="pl-c1">stringify</span>(params, {arrayFormat<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>brackets<span class="pl-pds">'</span></span>})
  },

  <span class="pl-c"><span class="pl-c">//</span> `data` is the data to be sent as the request body</span>
  <span class="pl-c"><span class="pl-c">//</span> Only applicable for request methods 'PUT', 'POST', and 'PATCH'</span>
  <span class="pl-c"><span class="pl-c">//</span> When no `transformRequest` is set, must be of one of the following types:</span>
  <span class="pl-c"><span class="pl-c">//</span> - string, plain object, ArrayBuffer, ArrayBufferView, URLSearchParams</span>
  <span class="pl-c"><span class="pl-c">//</span> - Browser only: FormData, File, Blob</span>
  <span class="pl-c"><span class="pl-c">//</span> - Node only: Stream, Buffer</span>
  data<span class="pl-k">:</span> {
    firstName<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>Fred<span class="pl-pds">'</span></span>
  },

  <span class="pl-c"><span class="pl-c">//</span> `timeout` specifies the number of milliseconds before the request times out.</span>
  <span class="pl-c"><span class="pl-c">//</span> If the request takes longer than `timeout`, the request will be aborted.</span>
  timeout<span class="pl-k">:</span> <span class="pl-c1">1000</span>, <span class="pl-c"><span class="pl-c">//</span> default is `0` (no timeout)</span>

  <span class="pl-c"><span class="pl-c">//</span> `withCredentials` indicates whether or not cross-site Access-Control requests</span>
  <span class="pl-c"><span class="pl-c">//</span> should be made using credentials</span>
  withCredentials<span class="pl-k">:</span> <span class="pl-c1">false</span>, <span class="pl-c"><span class="pl-c">//</span> default</span>

  <span class="pl-c"><span class="pl-c">//</span> `adapter` allows custom handling of requests which makes testing easier.</span>
  <span class="pl-c"><span class="pl-c">//</span> Return a promise and supply a valid response (see lib/adapters/README.md).</span>
  <span class="pl-en">adapter</span><span class="pl-k">:</span> <span class="pl-k">function</span> (<span class="pl-smi">config</span>) {
    <span class="pl-c"><span class="pl-c">/*</span> ... <span class="pl-c">*/</span></span>
  },

  <span class="pl-c"><span class="pl-c">//</span> `auth` indicates that HTTP Basic auth should be used, and supplies credentials.</span>
  <span class="pl-c"><span class="pl-c">//</span> This will set an `Authorization` header, overwriting any existing</span>
  <span class="pl-c"><span class="pl-c">//</span> `Authorization` custom headers you have set using `headers`.</span>
  auth<span class="pl-k">:</span> {
    username<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>janedoe<span class="pl-pds">'</span></span>,
    password<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>s00pers3cret<span class="pl-pds">'</span></span>
  },

  <span class="pl-c"><span class="pl-c">//</span> `responseType` indicates the type of data that the server will respond with</span>
  <span class="pl-c"><span class="pl-c">//</span> options are 'arraybuffer', 'blob', 'document', 'json', 'text', 'stream'</span>
  responseType<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>json<span class="pl-pds">'</span></span>, <span class="pl-c"><span class="pl-c">//</span> default</span>

  <span class="pl-c"><span class="pl-c">//</span> `responseEncoding` indicates encoding to use for decoding responses</span>
  <span class="pl-c"><span class="pl-c">//</span> Note: Ignored for `responseType` of 'stream' or client-side requests</span>
  responseEncoding<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>utf8<span class="pl-pds">'</span></span>, <span class="pl-c"><span class="pl-c">//</span> default</span>

  <span class="pl-c"><span class="pl-c">//</span> `xsrfCookieName` is the name of the cookie to use as a value for xsrf token</span>
  xsrfCookieName<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>XSRF-TOKEN<span class="pl-pds">'</span></span>, <span class="pl-c"><span class="pl-c">//</span> default</span>

  <span class="pl-c"><span class="pl-c">//</span> `xsrfHeaderName` is the name of the http header that carries the xsrf token value</span>
  xsrfHeaderName<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>X-XSRF-TOKEN<span class="pl-pds">'</span></span>, <span class="pl-c"><span class="pl-c">//</span> default</span>

  <span class="pl-c"><span class="pl-c">//</span> `onUploadProgress` allows handling of progress events for uploads</span>
  <span class="pl-en">onUploadProgress</span><span class="pl-k">:</span> <span class="pl-k">function</span> (<span class="pl-smi">progressEvent</span>) {
    <span class="pl-c"><span class="pl-c">//</span> Do whatever you want with the native progress event</span>
  },

  <span class="pl-c"><span class="pl-c">//</span> `onDownloadProgress` allows handling of progress events for downloads</span>
  <span class="pl-en">onDownloadProgress</span><span class="pl-k">:</span> <span class="pl-k">function</span> (<span class="pl-smi">progressEvent</span>) {
    <span class="pl-c"><span class="pl-c">//</span> Do whatever you want with the native progress event</span>
  },

  <span class="pl-c"><span class="pl-c">//</span> `maxContentLength` defines the max size of the http response content in bytes allowed</span>
  maxContentLength<span class="pl-k">:</span> <span class="pl-c1">2000</span>,

  <span class="pl-c"><span class="pl-c">//</span> `validateStatus` defines whether to resolve or reject the promise for a given</span>
  <span class="pl-c"><span class="pl-c">//</span> HTTP response status code. If `validateStatus` returns `true` (or is set to `null`</span>
  <span class="pl-c"><span class="pl-c">//</span> or `undefined`), the promise will be resolved; otherwise, the promise will be</span>
  <span class="pl-c"><span class="pl-c">//</span> rejected.</span>
  <span class="pl-en">validateStatus</span><span class="pl-k">:</span> <span class="pl-k">function</span> (<span class="pl-smi">status</span>) {
    <span class="pl-k">return</span> status <span class="pl-k">&gt;=</span> <span class="pl-c1">200</span> <span class="pl-k">&amp;&amp;</span> status <span class="pl-k">&lt;</span> <span class="pl-c1">300</span>; <span class="pl-c"><span class="pl-c">//</span> default</span>
  },

  <span class="pl-c"><span class="pl-c">//</span> `maxRedirects` defines the maximum number of redirects to follow in node.js.</span>
  <span class="pl-c"><span class="pl-c">//</span> If set to 0, no redirects will be followed.</span>
  maxRedirects<span class="pl-k">:</span> <span class="pl-c1">5</span>, <span class="pl-c"><span class="pl-c">//</span> default</span>

  <span class="pl-c"><span class="pl-c">//</span> `socketPath` defines a UNIX Socket to be used in node.js.</span>
  <span class="pl-c"><span class="pl-c">//</span> e.g. '/var/run/docker.sock' to send requests to the docker daemon.</span>
  <span class="pl-c"><span class="pl-c">//</span> Only either `socketPath` or `proxy` can be specified.</span>
  <span class="pl-c"><span class="pl-c">//</span> If both are specified, `socketPath` is used.</span>
  socketPath<span class="pl-k">:</span> <span class="pl-c1">null</span>, <span class="pl-c"><span class="pl-c">//</span> default</span>

  <span class="pl-c"><span class="pl-c">//</span> `httpAgent` and `httpsAgent` define a custom agent to be used when performing http</span>
  <span class="pl-c"><span class="pl-c">//</span> and https requests, respectively, in node.js. This allows options to be added like</span>
  <span class="pl-c"><span class="pl-c">//</span> `keepAlive` that are not enabled by default.</span>
  httpAgent<span class="pl-k">:</span> <span class="pl-k">new</span> <span class="pl-en">http.Agent</span>({ keepAlive<span class="pl-k">:</span> <span class="pl-c1">true</span> }),
  httpsAgent<span class="pl-k">:</span> <span class="pl-k">new</span> <span class="pl-en">https.Agent</span>({ keepAlive<span class="pl-k">:</span> <span class="pl-c1">true</span> }),

  <span class="pl-c"><span class="pl-c">//</span> 'proxy' defines the hostname and port of the proxy server.</span>
  <span class="pl-c"><span class="pl-c">//</span> You can also define your proxy using the conventional `http_proxy` and</span>
  <span class="pl-c"><span class="pl-c">//</span> `https_proxy` environment variables. If you are using environment variables</span>
  <span class="pl-c"><span class="pl-c">//</span> for your proxy configuration, you can also define a `no_proxy` environment</span>
  <span class="pl-c"><span class="pl-c">//</span> variable as a comma-separated list of domains that should not be proxied.</span>
  <span class="pl-c"><span class="pl-c">//</span> Use `false` to disable proxies, ignoring environment variables.</span>
  <span class="pl-c"><span class="pl-c">//</span> `auth` indicates that HTTP Basic auth should be used to connect to the proxy, and</span>
  <span class="pl-c"><span class="pl-c">//</span> supplies credentials.</span>
  <span class="pl-c"><span class="pl-c">//</span> This will set an `Proxy-Authorization` header, overwriting any existing</span>
  <span class="pl-c"><span class="pl-c">//</span> `Proxy-Authorization` custom headers you have set using `headers`.</span>
  proxy<span class="pl-k">:</span> {
    host<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>127.0.0.1<span class="pl-pds">'</span></span>,
    port<span class="pl-k">:</span> <span class="pl-c1">9000</span>,
    auth<span class="pl-k">:</span> {
      username<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>mikeymike<span class="pl-pds">'</span></span>,
      password<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>rapunz3l<span class="pl-pds">'</span></span>
    }
  },

  <span class="pl-c"><span class="pl-c">//</span> `cancelToken` specifies a cancel token that can be used to cancel the request</span>
  <span class="pl-c"><span class="pl-c">//</span> (see Cancellation section below for details)</span>
  cancelToken<span class="pl-k">:</span> <span class="pl-k">new</span> <span class="pl-en">CancelToken</span>(<span class="pl-k">function</span> (<span class="pl-smi">cancel</span>) {
  })
}</pre></div>
<h2><a id="user-content-response-schema" class="anchor" aria-hidden="true" href="#response-schema"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Response Schema</h2>
<p>The response for a request contains the following information.</p>
<div class="highlight highlight-source-js"><pre>{
  <span class="pl-c"><span class="pl-c">//</span> `data` is the response that was provided by the server</span>
  data<span class="pl-k">:</span> {},

  <span class="pl-c"><span class="pl-c">//</span> `status` is the HTTP status code from the server response</span>
  status<span class="pl-k">:</span> <span class="pl-c1">200</span>,

  <span class="pl-c"><span class="pl-c">//</span> `statusText` is the HTTP status message from the server response</span>
  statusText<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>OK<span class="pl-pds">'</span></span>,

  <span class="pl-c"><span class="pl-c">//</span> `headers` the headers that the server responded with</span>
  <span class="pl-c"><span class="pl-c">//</span> All header names are lower cased</span>
  headers<span class="pl-k">:</span> {},

  <span class="pl-c"><span class="pl-c">//</span> `config` is the config that was provided to `axios` for the request</span>
  config<span class="pl-k">:</span> {},

  <span class="pl-c"><span class="pl-c">//</span> `request` is the request that generated this response</span>
  <span class="pl-c"><span class="pl-c">//</span> It is the last ClientRequest instance in node.js (in redirects)</span>
  <span class="pl-c"><span class="pl-c">//</span> and an XMLHttpRequest instance the browser</span>
  request<span class="pl-k">:</span> {}
}</pre></div>
<p>When using <code>then</code>, you will receive the response as follows:</p>
<div class="highlight highlight-source-js"><pre><span class="pl-smi">axios</span>.<span class="pl-c1">get</span>(<span class="pl-s"><span class="pl-pds">'</span>/user/12345<span class="pl-pds">'</span></span>)
  .<span class="pl-c1">then</span>(<span class="pl-k">function</span> (<span class="pl-smi">response</span>) {
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(<span class="pl-smi">response</span>.<span class="pl-c1">data</span>);
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(<span class="pl-smi">response</span>.<span class="pl-c1">status</span>);
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(<span class="pl-smi">response</span>.<span class="pl-c1">statusText</span>);
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(<span class="pl-smi">response</span>.<span class="pl-c1">headers</span>);
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(<span class="pl-smi">response</span>.<span class="pl-smi">config</span>);
  });</pre></div>
<p>When using <code>catch</code>, or passing a <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise/then" rel="nofollow">rejection callback</a> as second parameter of <code>then</code>, the response will be available through the <code>error</code> object as explained in the <a href="#handling-errors">Handling Errors</a> section.</p>
<h2><a id="user-content-config-defaults" class="anchor" aria-hidden="true" href="#config-defaults"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Config Defaults</h2>
<p>You can specify config defaults that will be applied to every request.</p>
<h3><a id="user-content-global-axios-defaults" class="anchor" aria-hidden="true" href="#global-axios-defaults"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Global axios defaults</h3>
<div class="highlight highlight-source-js"><pre><span class="pl-smi">axios</span>.<span class="pl-smi">defaults</span>.<span class="pl-smi">baseURL</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>https://api.example.com<span class="pl-pds">'</span></span>;
<span class="pl-smi">axios</span>.<span class="pl-smi">defaults</span>.<span class="pl-c1">headers</span>.<span class="pl-smi">common</span>[<span class="pl-s"><span class="pl-pds">'</span>Authorization<span class="pl-pds">'</span></span>] <span class="pl-k">=</span> <span class="pl-c1">AUTH_TOKEN</span>;
<span class="pl-smi">axios</span>.<span class="pl-smi">defaults</span>.<span class="pl-c1">headers</span>.<span class="pl-smi">post</span>[<span class="pl-s"><span class="pl-pds">'</span>Content-Type<span class="pl-pds">'</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>application/x-www-form-urlencoded<span class="pl-pds">'</span></span>;</pre></div>
<h3><a id="user-content-custom-instance-defaults" class="anchor" aria-hidden="true" href="#custom-instance-defaults"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Custom instance defaults</h3>
<div class="highlight highlight-source-js"><pre><span class="pl-c"><span class="pl-c">//</span> Set config defaults when creating the instance</span>
<span class="pl-k">const</span> <span class="pl-c1">instance</span> <span class="pl-k">=</span> <span class="pl-smi">axios</span>.<span class="pl-en">create</span>({
  baseURL<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>https://api.example.com<span class="pl-pds">'</span></span>
});

<span class="pl-c"><span class="pl-c">//</span> Alter defaults after instance has been created</span>
<span class="pl-smi">instance</span>.<span class="pl-smi">defaults</span>.<span class="pl-c1">headers</span>.<span class="pl-smi">common</span>[<span class="pl-s"><span class="pl-pds">'</span>Authorization<span class="pl-pds">'</span></span>] <span class="pl-k">=</span> <span class="pl-c1">AUTH_TOKEN</span>;</pre></div>
<h3><a id="user-content-config-order-of-precedence" class="anchor" aria-hidden="true" href="#config-order-of-precedence"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Config order of precedence</h3>
<p>Config will be merged with an order of precedence. The order is library defaults found in <a href="https://github.com/axios/axios/blob/master/lib/defaults.js#L28">lib/defaults.js</a>, then <code>defaults</code> property of the instance, and finally <code>config</code> argument for the request. The latter will take precedence over the former. Here's an example.</p>
<div class="highlight highlight-source-js"><pre><span class="pl-c"><span class="pl-c">//</span> Create an instance using the config defaults provided by the library</span>
<span class="pl-c"><span class="pl-c">//</span> At this point the timeout config value is `0` as is the default for the library</span>
<span class="pl-k">const</span> <span class="pl-c1">instance</span> <span class="pl-k">=</span> <span class="pl-smi">axios</span>.<span class="pl-en">create</span>();

<span class="pl-c"><span class="pl-c">//</span> Override timeout default for the library</span>
<span class="pl-c"><span class="pl-c">//</span> Now all requests using this instance will wait 2.5 seconds before timing out</span>
<span class="pl-smi">instance</span>.<span class="pl-smi">defaults</span>.<span class="pl-smi">timeout</span> <span class="pl-k">=</span> <span class="pl-c1">2500</span>;

<span class="pl-c"><span class="pl-c">//</span> Override timeout for this request as it's known to take a long time</span>
<span class="pl-smi">instance</span>.<span class="pl-c1">get</span>(<span class="pl-s"><span class="pl-pds">'</span>/longRequest<span class="pl-pds">'</span></span>, {
  timeout<span class="pl-k">:</span> <span class="pl-c1">5000</span>
});</pre></div>
<h2><a id="user-content-interceptors" class="anchor" aria-hidden="true" href="#interceptors"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Interceptors</h2>
<p>You can intercept requests or responses before they are handled by <code>then</code> or <code>catch</code>.</p>
<div class="highlight highlight-source-js"><pre><span class="pl-c"><span class="pl-c">//</span> Add a request interceptor</span>
<span class="pl-smi">axios</span>.<span class="pl-smi">interceptors</span>.<span class="pl-smi">request</span>.<span class="pl-en">use</span>(<span class="pl-k">function</span> (<span class="pl-smi">config</span>) {
    <span class="pl-c"><span class="pl-c">//</span> Do something before request is sent</span>
    <span class="pl-k">return</span> config;
  }, <span class="pl-k">function</span> (<span class="pl-smi">error</span>) {
    <span class="pl-c"><span class="pl-c">//</span> Do something with request error</span>
    <span class="pl-k">return</span> <span class="pl-c1">Promise</span>.<span class="pl-c1">reject</span>(error);
  });

<span class="pl-c"><span class="pl-c">//</span> Add a response interceptor</span>
<span class="pl-smi">axios</span>.<span class="pl-smi">interceptors</span>.<span class="pl-smi">response</span>.<span class="pl-en">use</span>(<span class="pl-k">function</span> (<span class="pl-smi">response</span>) {
    <span class="pl-c"><span class="pl-c">//</span> Do something with response data</span>
    <span class="pl-k">return</span> response;
  }, <span class="pl-k">function</span> (<span class="pl-smi">error</span>) {
    <span class="pl-c"><span class="pl-c">//</span> Do something with response error</span>
    <span class="pl-k">return</span> <span class="pl-c1">Promise</span>.<span class="pl-c1">reject</span>(error);
  });</pre></div>
<p>If you may need to remove an interceptor later you can.</p>
<div class="highlight highlight-source-js"><pre><span class="pl-k">const</span> <span class="pl-c1">myInterceptor</span> <span class="pl-k">=</span> <span class="pl-smi">axios</span>.<span class="pl-smi">interceptors</span>.<span class="pl-smi">request</span>.<span class="pl-en">use</span>(<span class="pl-k">function</span> () {<span class="pl-c"><span class="pl-c">/*</span>...<span class="pl-c">*/</span></span>});
<span class="pl-smi">axios</span>.<span class="pl-smi">interceptors</span>.<span class="pl-smi">request</span>.<span class="pl-en">eject</span>(myInterceptor);</pre></div>
<p>You can add interceptors to a custom instance of axios.</p>
<div class="highlight highlight-source-js"><pre><span class="pl-k">const</span> <span class="pl-c1">instance</span> <span class="pl-k">=</span> <span class="pl-smi">axios</span>.<span class="pl-en">create</span>();
<span class="pl-smi">instance</span>.<span class="pl-smi">interceptors</span>.<span class="pl-smi">request</span>.<span class="pl-en">use</span>(<span class="pl-k">function</span> () {<span class="pl-c"><span class="pl-c">/*</span>...<span class="pl-c">*/</span></span>});</pre></div>
<h2><a id="user-content-handling-errors" class="anchor" aria-hidden="true" href="#handling-errors"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Handling Errors</h2>
<div class="highlight highlight-source-js"><pre><span class="pl-smi">axios</span>.<span class="pl-c1">get</span>(<span class="pl-s"><span class="pl-pds">'</span>/user/12345<span class="pl-pds">'</span></span>)
  .<span class="pl-c1">catch</span>(<span class="pl-k">function</span> (<span class="pl-smi">error</span>) {
    <span class="pl-k">if</span> (<span class="pl-smi">error</span>.<span class="pl-smi">response</span>) {
      <span class="pl-c"><span class="pl-c">//</span> The request was made and the server responded with a status code</span>
      <span class="pl-c"><span class="pl-c">//</span> that falls out of the range of 2xx</span>
      <span class="pl-en">console</span>.<span class="pl-c1">log</span>(<span class="pl-smi">error</span>.<span class="pl-smi">response</span>.<span class="pl-c1">data</span>);
      <span class="pl-en">console</span>.<span class="pl-c1">log</span>(<span class="pl-smi">error</span>.<span class="pl-smi">response</span>.<span class="pl-c1">status</span>);
      <span class="pl-en">console</span>.<span class="pl-c1">log</span>(<span class="pl-smi">error</span>.<span class="pl-smi">response</span>.<span class="pl-c1">headers</span>);
    } <span class="pl-k">else</span> <span class="pl-k">if</span> (<span class="pl-smi">error</span>.<span class="pl-smi">request</span>) {
      <span class="pl-c"><span class="pl-c">//</span> The request was made but no response was received</span>
      <span class="pl-c"><span class="pl-c">//</span> `error.request` is an instance of XMLHttpRequest in the browser and an instance of</span>
      <span class="pl-c"><span class="pl-c">//</span> http.ClientRequest in node.js</span>
      <span class="pl-en">console</span>.<span class="pl-c1">log</span>(<span class="pl-smi">error</span>.<span class="pl-smi">request</span>);
    } <span class="pl-k">else</span> {
      <span class="pl-c"><span class="pl-c">//</span> Something happened in setting up the request that triggered an Error</span>
      <span class="pl-en">console</span>.<span class="pl-c1">log</span>(<span class="pl-s"><span class="pl-pds">'</span>Error<span class="pl-pds">'</span></span>, <span class="pl-smi">error</span>.<span class="pl-smi">message</span>);
    }
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(<span class="pl-smi">error</span>.<span class="pl-smi">config</span>);
  });</pre></div>
<p>You can define a custom HTTP status code error range using the <code>validateStatus</code> config option.</p>
<div class="highlight highlight-source-js"><pre><span class="pl-smi">axios</span>.<span class="pl-c1">get</span>(<span class="pl-s"><span class="pl-pds">'</span>/user/12345<span class="pl-pds">'</span></span>, {
  <span class="pl-en">validateStatus</span><span class="pl-k">:</span> <span class="pl-k">function</span> (<span class="pl-smi">status</span>) {
    <span class="pl-k">return</span> status <span class="pl-k">&lt;</span> <span class="pl-c1">500</span>; <span class="pl-c"><span class="pl-c">//</span> Reject only if the status code is greater than or equal to 500</span>
  }
})</pre></div>
<h2><a id="user-content-cancellation" class="anchor" aria-hidden="true" href="#cancellation"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Cancellation</h2>
<p>You can cancel a request using a <em>cancel token</em>.</p>
<blockquote>
<p>The axios cancel token API is based on the withdrawn <a href="https://github.com/tc39/proposal-cancelable-promises">cancelable promises proposal</a>.</p>
</blockquote>
<p>You can create a cancel token using the <code>CancelToken.source</code> factory as shown below:</p>
<div class="highlight highlight-source-js"><pre><span class="pl-k">const</span> <span class="pl-c1">CancelToken</span> <span class="pl-k">=</span> <span class="pl-smi">axios</span>.<span class="pl-smi">CancelToken</span>;
<span class="pl-k">const</span> <span class="pl-c1">source</span> <span class="pl-k">=</span> <span class="pl-smi">CancelToken</span>.<span class="pl-c1">source</span>();

<span class="pl-smi">axios</span>.<span class="pl-c1">get</span>(<span class="pl-s"><span class="pl-pds">'</span>/user/12345<span class="pl-pds">'</span></span>, {
  cancelToken<span class="pl-k">:</span> <span class="pl-smi">source</span>.<span class="pl-smi">token</span>
}).<span class="pl-c1">catch</span>(<span class="pl-k">function</span> (<span class="pl-smi">thrown</span>) {
  <span class="pl-k">if</span> (<span class="pl-smi">axios</span>.<span class="pl-en">isCancel</span>(thrown)) {
    <span class="pl-en">console</span>.<span class="pl-c1">log</span>(<span class="pl-s"><span class="pl-pds">'</span>Request canceled<span class="pl-pds">'</span></span>, <span class="pl-smi">thrown</span>.<span class="pl-smi">message</span>);
  } <span class="pl-k">else</span> {
    <span class="pl-c"><span class="pl-c">//</span> handle error</span>
  }
});

<span class="pl-smi">axios</span>.<span class="pl-en">post</span>(<span class="pl-s"><span class="pl-pds">'</span>/user/12345<span class="pl-pds">'</span></span>, {
  name<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>new name<span class="pl-pds">'</span></span>
}, {
  cancelToken<span class="pl-k">:</span> <span class="pl-smi">source</span>.<span class="pl-smi">token</span>
})

<span class="pl-c"><span class="pl-c">//</span> cancel the request (the message parameter is optional)</span>
<span class="pl-smi">source</span>.<span class="pl-en">cancel</span>(<span class="pl-s"><span class="pl-pds">'</span>Operation canceled by the user.<span class="pl-pds">'</span></span>);</pre></div>
<p>You can also create a cancel token by passing an executor function to the <code>CancelToken</code> constructor:</p>
<div class="highlight highlight-source-js"><pre><span class="pl-k">const</span> <span class="pl-c1">CancelToken</span> <span class="pl-k">=</span> <span class="pl-smi">axios</span>.<span class="pl-smi">CancelToken</span>;
<span class="pl-k">let</span> cancel;

<span class="pl-smi">axios</span>.<span class="pl-c1">get</span>(<span class="pl-s"><span class="pl-pds">'</span>/user/12345<span class="pl-pds">'</span></span>, {
  cancelToken<span class="pl-k">:</span> <span class="pl-k">new</span> <span class="pl-en">CancelToken</span>(<span class="pl-k">function</span> <span class="pl-en">executor</span>(<span class="pl-smi">c</span>) {
    <span class="pl-c"><span class="pl-c">//</span> An executor function receives a cancel function as a parameter</span>
    cancel <span class="pl-k">=</span> c;
  })
});

<span class="pl-c"><span class="pl-c">//</span> cancel the request</span>
<span class="pl-en">cancel</span>();</pre></div>
<blockquote>
<p>Note: you can cancel several requests with the same cancel token.</p>
</blockquote>
<h2><a id="user-content-using-applicationx-www-form-urlencoded-format" class="anchor" aria-hidden="true" href="#using-applicationx-www-form-urlencoded-format"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Using application/x-www-form-urlencoded format</h2>
<p>By default, axios serializes JavaScript objects to <code>JSON</code>. To send data in the <code>application/x-www-form-urlencoded</code> format instead, you can use one of the following options.</p>
<h3><a id="user-content-browser" class="anchor" aria-hidden="true" href="#browser"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Browser</h3>
<p>In a browser, you can use the <a href="https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams" rel="nofollow"><code>URLSearchParams</code></a> API as follows:</p>
<div class="highlight highlight-source-js"><pre><span class="pl-k">const</span> <span class="pl-c1">params</span> <span class="pl-k">=</span> <span class="pl-k">new</span> <span class="pl-en">URLSearchParams</span>();
<span class="pl-smi">params</span>.<span class="pl-c1">append</span>(<span class="pl-s"><span class="pl-pds">'</span>param1<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>value1<span class="pl-pds">'</span></span>);
<span class="pl-smi">params</span>.<span class="pl-c1">append</span>(<span class="pl-s"><span class="pl-pds">'</span>param2<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>value2<span class="pl-pds">'</span></span>);
<span class="pl-smi">axios</span>.<span class="pl-en">post</span>(<span class="pl-s"><span class="pl-pds">'</span>/foo<span class="pl-pds">'</span></span>, params);</pre></div>
<blockquote>
<p>Note that <code>URLSearchParams</code> is not supported by all browsers (see <a href="http://www.caniuse.com/#feat=urlsearchparams" rel="nofollow">caniuse.com</a>), but there is a <a href="https://github.com/WebReflection/url-search-params">polyfill</a> available (make sure to polyfill the global environment).</p>
</blockquote>
<p>Alternatively, you can encode data using the <a href="https://github.com/ljharb/qs"><code>qs</code></a> library:</p>
<div class="highlight highlight-source-js"><pre><span class="pl-k">const</span> <span class="pl-c1">qs</span> <span class="pl-k">=</span> <span class="pl-c1">require</span>(<span class="pl-s"><span class="pl-pds">'</span>qs<span class="pl-pds">'</span></span>);
<span class="pl-smi">axios</span>.<span class="pl-en">post</span>(<span class="pl-s"><span class="pl-pds">'</span>/foo<span class="pl-pds">'</span></span>, <span class="pl-smi">qs</span>.<span class="pl-c1">stringify</span>({ <span class="pl-s"><span class="pl-pds">'</span>bar<span class="pl-pds">'</span></span><span class="pl-k">:</span> <span class="pl-c1">123</span> }));</pre></div>
<p>Or in another way (ES6),</p>
<div class="highlight highlight-source-js"><pre><span class="pl-k">import</span> <span class="pl-smi">qs</span> <span class="pl-k">from</span> <span class="pl-s"><span class="pl-pds">'</span>qs<span class="pl-pds">'</span></span>;
<span class="pl-k">const</span> <span class="pl-c1">data</span> <span class="pl-k">=</span> { <span class="pl-s"><span class="pl-pds">'</span>bar<span class="pl-pds">'</span></span><span class="pl-k">:</span> <span class="pl-c1">123</span> };
<span class="pl-k">const</span> <span class="pl-c1">options</span> <span class="pl-k">=</span> {
  method<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>POST<span class="pl-pds">'</span></span>,
  headers<span class="pl-k">:</span> { <span class="pl-s"><span class="pl-pds">'</span>content-type<span class="pl-pds">'</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>application/x-www-form-urlencoded<span class="pl-pds">'</span></span> },
  data<span class="pl-k">:</span> <span class="pl-smi">qs</span>.<span class="pl-c1">stringify</span>(data),
  url,
};
<span class="pl-en">axios</span>(options);</pre></div>
<h3><a id="user-content-nodejs" class="anchor" aria-hidden="true" href="#nodejs"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Node.js</h3>
<p>In node.js, you can use the <a href="https://nodejs.org/api/querystring.html" rel="nofollow"><code>querystring</code></a> module as follows:</p>
<div class="highlight highlight-source-js"><pre><span class="pl-k">const</span> <span class="pl-c1">querystring</span> <span class="pl-k">=</span> <span class="pl-c1">require</span>(<span class="pl-s"><span class="pl-pds">'</span>querystring<span class="pl-pds">'</span></span>);
<span class="pl-smi">axios</span>.<span class="pl-en">post</span>(<span class="pl-s"><span class="pl-pds">'</span>http://something.com/<span class="pl-pds">'</span></span>, <span class="pl-smi">querystring</span>.<span class="pl-c1">stringify</span>({ foo<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>bar<span class="pl-pds">'</span></span> }));</pre></div>
<p>You can also use the <a href="https://github.com/ljharb/qs"><code>qs</code></a> library.</p>
<h6><a id="user-content-note-1" class="anchor" aria-hidden="true" href="#note-1"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>NOTE</h6>
<p>The <code>qs</code> library is preferable if you need to stringify nested objects, as the <code>querystring</code> method has known issues with that use case (<a href="https://github.com/nodejs/node-v0.x-archive/issues/1665">https://github.com/nodejs/node-v0.x-archive/issues/1665</a>).</p>
<h2><a id="user-content-semver" class="anchor" aria-hidden="true" href="#semver"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Semver</h2>
<p>Until axios reaches a <code>1.0</code> release, breaking changes will be released with a new minor version. For example <code>0.5.1</code>, and <code>0.5.4</code> will have the same API, but <code>0.6.0</code> will have breaking changes.</p>
<h2><a id="user-content-promises" class="anchor" aria-hidden="true" href="#promises"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Promises</h2>
<p>axios depends on a native ES6 Promise implementation to be <a href="http://caniuse.com/promises" rel="nofollow">supported</a>.
If your environment doesn't support ES6 Promises, you can <a href="https://github.com/jakearchibald/es6-promise">polyfill</a>.</p>
<h2><a id="user-content-typescript" class="anchor" aria-hidden="true" href="#typescript"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>TypeScript</h2>
<p>axios includes <a href="http://typescriptlang.org/" rel="nofollow">TypeScript</a> definitions.</p>
<div class="highlight highlight-source-ts"><pre><span class="pl-k">import</span> <span class="pl-smi">axios</span> <span class="pl-k">from</span> <span class="pl-s"><span class="pl-pds">'</span>axios<span class="pl-pds">'</span></span>;
<span class="pl-smi">axios</span>.<span class="pl-c1">get</span>(<span class="pl-s"><span class="pl-pds">'</span>/user?ID=12345<span class="pl-pds">'</span></span>);</pre></div>
<h2><a id="user-content-resources" class="anchor" aria-hidden="true" href="#resources"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Resources</h2>
<ul>
<li><a href="https://github.com/axios/axios/blob/master/CHANGELOG.md">Changelog</a></li>
<li><a href="https://github.com/axios/axios/blob/master/UPGRADE_GUIDE.md">Upgrade Guide</a></li>
<li><a href="https://github.com/axios/axios/blob/master/ECOSYSTEM.md">Ecosystem</a></li>
<li><a href="https://github.com/axios/axios/blob/master/CONTRIBUTING.md">Contributing Guide</a></li>
<li><a href="https://github.com/axios/axios/blob/master/CODE_OF_CONDUCT.md">Code of Conduct</a></li>
</ul>
<h2><a id="user-content-credits" class="anchor" aria-hidden="true" href="#credits"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Credits</h2>
<p>axios is heavily inspired by the <a href="https://docs.angularjs.org/api/ng/service/$http" rel="nofollow">$http service</a> provided in <a href="https://angularjs.org/" rel="nofollow">Angular</a>. Ultimately axios is an effort to provide a standalone <code>$http</code>-like service for use outside of Angular.</p>
<h2><a id="user-content-license" class="anchor" aria-hidden="true" href="#license"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>License</h2>
<p>MIT</p>
</article>
      </div>
  </div>



  </div>
  <div class="modal-backdrop js-touch-events"></div>
</div>

    </main>
  </div>
  

  </div>

        
<div class="footer container-lg width-full px-3" role="contentinfo">
  <div class="position-relative d-flex flex-justify-between pt-6 pb-2 mt-6 f6 text-gray border-top border-gray-light ">
    <ul class="list-style-none d-flex flex-wrap ">
      <li class="mr-3">© 2019 <span title="0.40842s from unicorn-b4885df7d-kxxs2">GitHub</span>, Inc.</li>
        <li class="mr-3"><a data-ga-click="Footer, go to terms, text:terms" href="https://github.com/site/terms">Terms</a></li>
        <li class="mr-3"><a data-ga-click="Footer, go to privacy, text:privacy" href="https://github.com/site/privacy">Privacy</a></li>
        <li class="mr-3"><a data-ga-click="Footer, go to security, text:security" href="https://github.com/security">Security</a></li>
        <li class="mr-3"><a href="https://githubstatus.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
        <li><a data-ga-click="Footer, go to help, text:help" href="https://help.github.com/">Help</a></li>
    </ul>

    <a aria-label="Homepage" title="GitHub" class="footer-octicon mx-lg-4" href="https://github.com/">
      <svg height="24" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="24" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
</a>
   <ul class="list-style-none d-flex flex-wrap ">
        <li class="mr-3"><a data-ga-click="Footer, go to contact, text:contact" href="https://github.com/contact">Contact GitHub</a></li>
        <li class="mr-3"><a href="https://github.com/pricing" data-ga-click="Footer, go to Pricing, text:Pricing">Pricing</a></li>
      <li class="mr-3"><a href="https://developer.github.com/" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li class="mr-3"><a href="https://training.github.com/" data-ga-click="Footer, go to training, text:training">Training</a></li>
        <li class="mr-3"><a href="https://github.blog/" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a data-ga-click="Footer, go to about, text:about" href="https://github.com/about">About</a></li>

    </ul>
  </div>
  <div class="d-flex flex-justify-center pb-6">
    <span class="f6 text-gray-light"></span>
  </div>
</div>



  <div id="ajax-error-message" class="ajax-error-message flash flash-error">
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 0 0 0 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 0 0 .01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"></path></svg>
    <button type="button" class="flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"></path></svg>
    </button>
    You can’t perform that action at this time.
  </div>


    
    <script crossorigin="anonymous" integrity="sha512-m1DeH+jLA0IS/zzy50Kv0yBpZJDQlBkcACJzTGJUq30SG1eo5vztaQg1x1KV1L3XGePC1HOdKU1fu7Ktr+5nsg==" type="application/javascript" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/frameworks-3c669c6d.js"></script>
    
    <script crossorigin="anonymous" async="async" integrity="sha512-5fkE5HlHUvjDCSLq2ACLerBiuS+N3x36xiX0Dld1w8J0+IpjD1ddnmRd806jtn+QoMMGkLFSUMXVvMN4JUkZSw==" type="application/javascript" src="%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C_axios_axios%20%20Promise%20based%20HTTP%20client%20for%20the%20browser%20and%20node/github-bootstrap-7f581dd4.js"></script>
    
    
    
  <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner" hidden="">
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 0 0 0 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 0 0 .01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"></path></svg>
    <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
    <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
  </div>
  <template id="site-details-dialog">
  <details class="details-reset details-overlay details-overlay-dark lh-default text-gray-dark" open="">
    <summary aria-haspopup="dialog" aria-label="Close dialog"></summary>
    <details-dialog class="Box Box--overlay d-flex flex-column anim-fade-in fast">
      <button class="Box-btn-octicon m-0 btn-octicon position-absolute right-0 top-0" type="button" aria-label="Close dialog" data-close-dialog="">
        <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"></path></svg>
      </button>
      <div class="octocat-spinner my-6 js-details-dialog-spinner"></div>
    </details-dialog>
  </details>
</template>

  <div class="Popover js-hovercard-content position-absolute" style="display: none; outline: none;" tabindex="0">
  <div class="Popover-message Popover-message--bottom-left Popover-message--large Box box-shadow-large" style="width:360px;">
  </div>
</div>

  <div aria-live="polite" class="js-global-screen-reader-notice sr-only"></div>

  


</body></html>