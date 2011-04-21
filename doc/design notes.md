# Comicus Design Notes

## Models

* Site
  - name
  - published_at

* ServerInfo
  - site_id
  - host
  - path
  - user
  - password
  - port
  - type

* Page
  - site_id
  - title
  - slug
  - body
  - source

* Post
  - site_id
  - title
  - slug
  - body
  - summary
  - source
  - publish_on

* Category
  - site_id
  - name
  - post_id

* Tag
  - site_id
  - name
  - post_id

* Story
  - site_id
  - title
  - cover_image
  - auto_cover  # From first strip

* Strip
  - site_id
  - title
  - body
  - image
  - publish_on

* Character
  - site_id
  - name
  - strip_id
