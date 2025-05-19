import React from "react";
import { graphql, Link } from "gatsby";
import Layout from "../components/layout";

const IndexPage = ({ data }) => (
  <Layout>
    <h1>Benvenuti nel mio blog!</h1>
    <ul>
      {data.allMarkdownRemark.edges.map(({ node }) => (
        <li key={node.id}>
          <Link to={`/blog/${node.frontmatter.title.toLowerCase().replace(/\s+/g, '-')}/`}>
            {node.frontmatter.title}
          </Link>
        </li>
      ))}
    </ul>
  </Layout>
);

export const query = graphql`
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
`;

export default IndexPage;
