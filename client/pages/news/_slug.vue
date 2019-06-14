<template>
  <main>
    <div class="container mt-5 mb-5">
      <div class="content" v-html="post.content" />

      <div id="comments">
        <h4>Comments section</h4>
      </div>
    </div>
  </main>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  computed: mapGetters({
    post: 'blog/getPost'
  }),
  fetch({ store, params }) {
    // await axios get post info
    const post = {
      id: 1,
      category: {
        title: 'Cardiology',
        slug: 'cardiology'
      },
      title: 'The awesome news',
      content: '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet atque beatae blanditiis delectus deserunt dignissimos ducimus ea error eum fuga id incidunt ipsum, itaque labore laborum mollitia neque nulla odit officia officiis provident quia quibusdam sunt temporibus tenetur totam voluptatum! A dicta distinctio dolorem dolores ea, eius eligendi enim eum eveniet excepturi facilis, illum inventore laudantium minus nesciunt odio officia pariatur quis ullam vel? Aperiam aspernatur doloribus est necessitatibus non, numquam quia saepe veniam voluptatibus! A accusantium amet architecto asperiores blanditiis commodi consequatur consequuntur, culpa delectus error est eveniet ex excepturi expedita illum itaque, labore minus mollitia nesciunt pariatur placeat possimus quae quaerat qui repellendus, saepe sequi soluta tempora temporibus totam ut veritatis voluptas voluptate. Adipisci animi blanditiis cum, cumque dolores illum itaque maiores neque numquam praesentium quaerat quibusdam quo quod repudiandae similique, soluta velit! Aliquid atque debitis est id in inventore iste necessitatibus, quaerat quis sed soluta ut.</p>',
      slug: params.slug
    }

    store.dispatch('blog/setPost', post)

    store.dispatch('page/setTitle', post.title)
    store.dispatch('page/setType', 'single-page')
    store.dispatch('page/setBackground', 'news-bg.png')
    store.dispatch('page/setBreadcrumbs', [
      {
        name: 'Home',
        route: 'index',
        active: true
      },
      {
        name: 'News',
        route: 'news',
        active: true
      },
      {
        name: post.category.title,
        route: 'news-index-categories-slug',
        params: {
          slug: post.category.slug
        },
        active: true
      },
      {
        name: post.title,
        route: ''
      }
    ])
  }
}
</script>
