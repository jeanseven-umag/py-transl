import instaloader

L = instaloader.Instaloader()
posts = L.get_hashtag_posts('времяуборкиtefal')

users = set()
for post in posts:
    users.add(post.owner_username)
    print(post.owner_username)