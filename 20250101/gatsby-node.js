const path = require('path');

exports.createPages = async ({ graphql, actions }) => {
  const { createPage } = actions;

  const result = await graphql(`
    query {
      allMarkdownRemark {
        edges {
          node {
            id
            frontmatter {
              title
            }
          }
        }
      }
    }
  `);

  result.data.allMarkdownRemark.edges.forEach(({ node }) => {
    createPage({
      path: `/blog/${node.frontmatter.title.toLowerCase().replace(/\s+/g, '-')}/`,
      component: path.resolve(`./src/templates/blog-post.js`),
      context: {
        id: node.id,
      },
    });
  });
};
